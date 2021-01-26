@if (count(config('available_languages.idiomas_disponibles')) > 1)
    <li class="nav-item dropdown">
        <a id="languagesDropdown" class="nav-link dropdown-toggle menuDrop" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ __('BM/general/idiomas.Seleccione su idioma') }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right submenuPanel" aria-labelledby="languagesDropdown">
            @foreach(config('available_languages.idiomas_disponibles') as $idioma)
                @if (App::getLocale() == $idioma['code'])
                    @continue
                @endif
                <a class="dropdown-item menuItem" href="{{ route('BM_chlg', ['locale' => $idioma['code']]) }}">
                    <img src="{{ asset(config('paths_to_files.flags_xs').$idioma['image_name']) }}" class="smallFlag">
                    {{ __('BM//general/idiomas.'.$idioma['variable_name']) }}
                </a>
            @endforeach
        </div>
    </li>
@endif
