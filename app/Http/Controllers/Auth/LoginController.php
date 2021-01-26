<?php

namespace App\Http\Controllers\Auth;

use PragmaRX\Google2FA\Google2FA;
use App\Mail\Code2fa;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\SMS_Access;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function BM_showLoginForm()
    {
        return view('BM.auth.login');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function BM_logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }

    public function username()
    {
        return 'identifier';
    }

    protected function credentials(Request $request)
    {
        $login = $request->input($this->username());

        /**
         * Comprobamos si el campo de identificador tiene formato de e-mail.
         * Si no lo tiene, comprobaremos las credenciales contra el campo
         * de login (user, o username, o como lo hayamos llamado
         * en la base de datos) y la contraseña.
         * Si el campo de identificador tiene formato de email,
         * comprobaremos las credenciales contra el campo email
         * (poniéndole aquí el nombre con el que dicho campo está
         * en la base de datos).
         */
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        return [
            $field => $login,
            'password' => $request->input('password'),
        ];
    }

    public function BM_login(Request $request)
    {
        $this->validateLogin($request);
        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if (filter_var($request->identifier, FILTER_VALIDATE_EMAIL)) {
            $user = User::where('email', '=', $request->identifier)->first();
        } else {
            $user = User::where('username', '=', $request->identifier)->first();
        }

        if (password_verify($request->password, optional($user)->password)) {
            $request->session()->regenerate();
            Auth::login($user);
            $this->clearLoginAttempts($request);
            session()->put('locale', $user->language);
            App::setLocale($user->language);

            if (env('2FA_CODE') == 'mail' && null !== $user->email_verified_at) { // 2FA por correo
                $key = (new Google2FA())->generateSecretKey();
                $user->token_login = $key;
                $user->save();
                Mail::send(new Code2fa(
                    [
                        'email' => $user->email,
                        'name' => $user->name,
                        'code' => $key,
                    ]
                ));
                return view('BM.auth.code2fa')->with([
                    'user' => $user,
                    'system' => 'mail',
                ]);
            } elseif (env('2FA_CODE') == 'phone' && null !== $user->phone_verified_at) { // 2FA por SMS
                $user->sendSMSCode();
                return view('BM.auth.code2fa')->with([
                    'user' => $user,
                    'system' => 'phone',
                ]);
            } else { // Sin 2FA
                $scope = $user->scope;
                $this->redirectTo = ($scope == 'M') ? 'master/index' : (($scope == 'A') ? 'admin/index' : 'user/index');
                return $this->sendLoginResponse($request);
            }
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }

    // Confirmación de código 2FA
    public function BM_confirm2fa(Request $request, User $user) {
        if ($user->token_login != $request->typed_code) {
            return view('BM.auth.code2fa_mail')
                ->withInput($request->flashOnly(['typed_code']))
                ->with(['user' => $user])
                ->withErrors(['typed_code'=> __('BM/auth/login.Wrong verification code.')]);
        }
        $request->session()->regenerate();
        Auth::login($user);
        // Ha pasado la validación del código 2FA por mail
        $scope = $user->scope;
        $this->redirectTo = ($scope == 'M') ? 'master/index' : (($scope == 'A') ? 'admin/index' : 'user/index');
        return $this->sendLoginResponse($request);
    }

    // Reenvío de código 2FA
    public function BM_resendCode(Request $request, User $user)
    {
        $system = $request->system;
        $code = $user->token_login;
        if ($system == 'mail') { // Envío por correo
            Mail::send(new Code2fa(
                [
                    'email' => $user->email,
                    'name' => $user->name,
                    'code' => $code,
                ]
            ));
        } else { // Envío por SMS
            $mensaje = [
                'codigo' => $user->token_login,
            ];
            $user->notify(new SMS_Access($mensaje));
        }
        return view('BM.auth.code2fa')->with([
            'user' => $user,
            'system' => $system,
        ]);
    }

    // Reenvio de solcitud de confirmación
    public function BM_resendVerification(Request $request)
    {
        if ($request->conf_type == 'mail') { // Se ha solicitado el reenvio del mail de verificación
            auth()->user()->sendEmailVerificationNotification();
        } else { // Se ha solicitado el reenvío del SMS de verificacion
            auth()->user()->sendSMSCode();
        }
    }

    /**
     * El siguiente método es invocado tras el registro y/o acceso.
     * Si el usuario tiene pendiente la verificación de email
     * y/o teléfono móvil, no le permite continuar.
     */
    public function BM_checkVerify()
    {
        if (null !== auth()->user()->email_verified_at && null !== auth()->user()->phone_verified_at) {
            return redirect()->back();
        }
        return view('BM.auth.check_verify');
    }

    public function BM_recheckEmailVerificaton()
    {
        echo (null === auth()->user()->email_verified_at) ? "N" : "S";
    }

    public function BM_ckeckSMSCode(Request $request)
    {
        $currentCode = auth()->user()->token_login;
        if ($currentCode == $request->typed_code) {
            auth()->user()->phone_verified_at = date('Y-m-d H:i:s');
            auth()->user()->save();
            echo "S";
        } else {
            echo "N";
        }
    }
}
