@guest
    <li class="nav-item">
        <a class="nav-link menuItem" href="{{ route('BM_login') }}">{{ __('BM/auth/login.Login') }}</a>
    </li>
    @if (Route::has('BM_register') && env('SPC_REGISTER') === true)
        <li class="nav-item">
            <a class="nav-link menuItem" href="{{ route('BM_register') }}">{{ __('BM/auth/register.Register') }}</a>
        </li>
    @endif
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle menuDrop" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->username }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            @if (Auth::user()->scope == 'M')
                @if (!Route::current()->getPrefix() == '/master')
                    <a class="dropdown-item menuItem" href="{{ route('master.BM_index') }}" >
                        {{ __('BM/general/accesos_principales.Panel de control') }}
                    </a>
                @endif
                @if (!Route::current()->getPrefix() == '/admin')
                    <a class="dropdown-item menuItem" href="{{ route('admin.BM_index') }}" >
                        {{ __('BM/general/accesos_principales.Panel de gestion') }}
                    </a>
                @endif
            @elseif (Auth::user()->scope == 'A')
                @if (!Route::current()->getPrefix() == '/admin')
                    <a class="dropdown-item menuItem" href="{{ route('admin.BM_index') }}" >
                        {{ __('BM/general/accesos_principales.Panel de gestion') }}
                    </a>
                @endif
                // User
            @else
                @if (!Route::current()->getPrefix() == '/user')
                    <a class="dropdown-item menuItem" href="{{ route('user.BM_index') }}" >
                        {{ __('BM/general/accesos_principales.Panel de usuario') }}
                    </a>
                @endif
            @endif
            @if (Route::current()->getPrefix() == '/master' || Route::current()->getPrefix() == '/admin' || Route::current()->getPrefix() == '/user')
                <a class="dropdown-item menuItem" href="{{ route('BM_index') }}" >
                    {{ __('BM/general/accesos_principales.Página principal') }}
                </a>
            @endif
            <a class="dropdown-item menuItem" href="{{ route('BM_edit-profile', ['user' => auth()->user()->id, ]) }}" id="editMyProfile">
                {{ __('BM/general/accesos_principales.Mi perfil') }}
            </a>
        </div>
    </li>
    @if (session()->has('impersonater_user'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('BM_imp_stop') }}" title="{{ __('BM/auth/login.Stop impersonate') }}">
                <i class="fas fa-walking closeIcon"></i>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('BM_logout') }}" id="logout_link" title="{{ __('BM/auth/login.Logout') }}">
                <i class="fas fa-power-off closeIcon"></i>
            </a>
        </li>
    @endif
    <li class="nav-item">
        &nbsp;&nbsp;&nbsp;&nbsp;
        @php $avatar = "images/avatars/".Auth::user()->avatar; @endphp
        <img src="{{ asset($avatar) }}"  class="rounded-circle avatar">
    </li>
@endguest

