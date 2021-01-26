@auth
    <li class="nav-item dropdown">
        <a id="languagesDropdown" class="nav-link dropdown-toggle menuDrop" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ __('BM/general/accesos_principales.Seleccione tema') }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right submenuPanel" aria-labelledby="languagesDropdown">
            @foreach(config('available_themes') as $keyTheme=>$theme)
                @if (auth()->user()->theme == $keyTheme)
                    @continue
                @endif
                <a class="dropdown-item menuItem" href="{{ route('BM_chth', ['theme' => $keyTheme]) }}">
                    {{ $theme }}
                </a>
            @endforeach
        </div>
    </li>
@endauth
