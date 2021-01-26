<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    public function __construct()
    {
        //
    }

    public function BM_index()
    {
        return view('BM.index');
    }

    public function BM_changeLanguage($locale)
    {
        if (!in_array($locale, config('available_languages.languages_codes'))) {
            abort(404, 'Selection error');
        }

        if (auth()->user()) {
            auth()->user()->language = $locale;
            auth()->user()->save();
        }
        session()->put('locale', $locale);
        return back();
    }

    public function BM_changeTheme($theme)
    {
        if (!array_key_exists($theme, config('available_themes'))) {
            abort(404, 'Selection error');
        }

        if (auth()->user()) {
            auth()->user()->theme = $theme;
            auth()->user()->save();
        }
        return back();
    }

    /**
     * Los dos méodos siguietes establecen el estado del menú lateral (plegado o desplegado)
     * y lo leen para mostrarlo u ocultarlo.
     */
    public function BM_changeSideMenuState(Request $request)
    {
        auth()->user()->menu_bar_deployed = ($request->activeState == 'true') ? 1 : 0;
        auth()->user()->save();
    }

    public function BM_readSideMenuState()
    {
        echo (auth()->user()) ? auth()->user()->menu_bar_deployed : 0;
    }

    /**
     * Los dos métodos siguientes se usan para editar el perfil de usuario,
     * tanto del propio usuario en curso, como de un usuario al que el
     * actual pueda editar.
     */
    public function BM_showProfile($id)
    {
        // El usuario a editar ($user) y el usuario activo ($currentUser).
        $user = User::find($id);
        $currentUser = auth()->user();

        // Se determina si el usuario activo puede editar la ficha solicitada.
        // Se usa un helper de creación propia de la plantilla
        if (BM_EditUserAllowed($user, $currentUser) == 'S') {
            return view('BM.exceptions.not_allowed_operation');
        }

        // Se determinan los scopes que se ofrecerán para el registro.
        if ($currentUser->scope == 'U') {
            $scopes = [
                'U' => 'User text',
            ];
        } elseif ($currentUser->scope == 'A') {
            $scopes = [
                'U' => 'User text',
                'A' => 'Admin text',
            ];
        } elseif ($currentUser->scope == 'M') {
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

        return view ('BM.users.showProfile', compact('user', 'idiomas', 'prefixes', 'scopes'));
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
            'username' => ['required', 'string', 'min:8', 'max:255', 'unique:users,username,'.$data['id'].',id'],
            'scope' => ['required', 'in_array:accepted_scopes.*'],
            'language' => ['required', 'in_array:accepted_languages.*'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$data['id'].',id'],
        ];

        if ($data['password'] !== null) {
            $rules['password'] = ['string', 'min:8', 'confirmed'];
        } else {
            $rules['password'] = ['confirmed'];
        }

        if (env('PHONE_IN_REGISTER') === true && env('PHONE_MANDATORY') === true) {
            $data['accepted_prefixes'] = config('country_prefixes.prefixCodes');
            $rules['country_code'] = ['required', 'in_array:accepted_prefixes.*'];
            $rules['phone_number'] = ['required', 'digits_between:9,15'];
        }

        return Validator::make($data, $rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function update(array $data)
    {
        session()->put('locale', $data['language']);
        App::setLocale($data['language']);
        $user = User::find($data['id']);
        $user->scope = $data['scope'];
        $user->first_name = $data['first_name'];
        $user->surname = $data['surname'];
        $user->username = $data['username'];
        $user->language = $data['language'];
        if ($data['email'] != $user->email) {
            $user->email = $data['email'];
            if (env('MAIL_MUST_BE_VERIFIED')) {
                $user->email_verified_at = null;
            }
        }
        if ($data['country_code'] != $user->country_code || $data['phone_number'] != $user->phone_number) {
            $user->country_code = $data['country_code'];
            $user->phone_number = $data['phone_number'];
            if (env('PHONE_MUST_BE_VERIFIED')) {
                $user->phone_verified_at = null;
            }
        }
        if (null !== $data['password']) {
            $user->password = Hash::make($data['password']);
        }
        if (isset($data['avatar'])) {
            $user->avatar = 'avatar_'.$data['id'].'.jpg';
            \Storage::disk('public')->put('images/avatars/avatar_'.$data['id'].'.jpg',  \File::get($data['avatar']));
        }
        $user->save();
        return $user->avatar;
    }

    public function BM_updateProfile(Request $request)
    {
        $this->BM_validator($request->all())->validate();
        $avatar = $this->update($request->all());

        return view('BM.users.user_updated')
            ->with(
                [
                    'data' => $request->all(),
                    'avatar' => $avatar,
                ]
            );
    }

    /**
     * A continuación el método que activa la impersonación de un usuario.
     */
    public function BM_impersonate(Request $request)
    {
        session(['impersonater_user' => auth()->id()]);
        auth()->loginUsingId($request->user);
        return redirect()->route('BM_index');
    }

    /**
     * A continuación el método que finaliza la impersonación de un usuario
     */
    public function BM_stopImpersonate()
    {
        auth()->loginUsingId(session()->get('impersonater_user'));
        session()->forget('impersonater_user');
        if (auth()->user()->scope == 'M') { // El usuario imppersonador es master
            $ruta = 'master.BM_users_list';
        } else { // El usuario impersonador es Admin, porque el scope User no puede impersonar
            $ruta = 'admin.BM_users_list';
        }
        return redirect()->route($ruta);
    }
}
