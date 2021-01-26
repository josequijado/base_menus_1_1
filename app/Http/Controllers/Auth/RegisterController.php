<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

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
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function BM_showRegistrationForm()
    {
        // Se determinan los scopes que se ofrecerán para el registro.
        $user = auth()->user();
        if ($user == null) {
            $scopes = [
                'U' => 'User text',
            ];
        } elseif ($user->scope == 'U') {
            return redirect('/');
        } elseif ($user->scope == 'A') {
            $scopes = [
                'U' => 'User text',
                'A' => 'Admin text',
            ];
        } elseif ($user->scope == 'M') {
            $scopes = [
                'U' => 'User text',
                'A' => 'Admin text',
                'M' => 'Master text',
            ];
        }

        // Se determinan los idiomas que se ofrecerán para el registro.
        $languages = config('available_languages.idiomas_disponibles');
        $idiomas = [];
        foreach ($languages as $lang) {
            $idiomas[] = ['value' => $lang['code'], 'text' => $lang['variable_name']];
        }

        // Se obtiene la lista de prefijos telefónicos de paises, en el idioma activo.
        $prefixes = config('country_prefixes.countryCodes.'.((session()->get('locale'))?:'es'));

        return view('BM.auth.register', compact('idiomas', 'scopes', 'prefixes'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function BM_validator(array $data)
    {
        $languages = config('available_languages.idiomas_disponibles');
        $data['accepted_languages'] = [];
        foreach ($languages as $keyLang=>$lang) {
            $data['accepted_languages'][] = $keyLang;
        }

        $data['accepted_scopes'] = [
            'U',
            'A',
            'M',
        ];

        // Se define aquí la matriz de reglas de validación, por si luego es el caso de añadir
        // validaciones específicas para teléfono.
        $rules = [
            'first_name' => ['required', 'string', 'min:3', 'max:255'],
            'surname' => ['required', 'string', 'min:5', 'max:255'],
            'username' => ['required', 'string', 'min:8', 'max:255', 'unique:users'],
            'scope' => ['required', 'in_array:accepted_scopes.*'],
            'language' => ['required', 'in_array:accepted_languages.*'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        if (env('PHONE_IN_REGISTER') === true && env('PHONE_MANDATORY') === true) {
            $data['accepted_prefixes'] = config('country_prefixes.prefixCodes');
            $rules['country_code'] = ['required', 'in_array:accepted_prefixes.*'];
            $rules['phone_number'] = 'required|digits_between:9,15';
        }

        return Validator::make($data, $rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        session()->put('locale', $data['language']);
        App::setLocale($data['language']);
        return User::create([
            'scope' => $data['scope'],
            'first_name' => $data['first_name'],
            'surname' => $data['surname'],
            'username' => $data['username'],
            'theme' => 'standard',
            'avatar' => 'no_avatar.jpg',
            'language' => $data['language'],
            'email' => $data['email'],
            'country_code' => $data['country_code'],
            'phone_number' => $data['phone_number'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function BM_saveNewUser(Request $request)
    {
        // Se hace la validación y, en su caso, la grabación.
        $this->BM_validator($request->all())->validate();
        event(new Registered($newUser = $this->create($request->all())));

        // Si se debe verificar el mail
        if (env('MAIL_MUST_BE_VERIFIED')) {
            $newUser->sendEmailVerificationNotification();
        } else {
            $newUser->email_verified_at = date('Y-m-d H:i:s');
            $newUser->save();
        }
        /* Si se debe verificar el teléfono */
        if (env('PHONE_IN_REGISTER') && env('PHONE_MUST_BE_VERIFIED')) {
            $newUser->sendSMSCode();
        } else {
            $newUser->phone_verified_at = date('Y-m-d H:i:s');
            $newUser->save();
        }

        // Si es un autoregistro se fija el idioma del nuevo usuario
        if (auth()->user() === null) {
            auth()->login($newUser);
            session()->put('locale', auth()->user()->language);
        }

        return view('BM.auth.user_is_created');
    }
}

