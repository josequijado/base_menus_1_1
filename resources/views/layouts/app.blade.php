<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @inject('side_menu', 'App\Services\ReadGroupsAndOptions')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        {{-- CSS Font-Awesome --}}
        <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/brands.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/solid.min.css') }}">

        {{-- Styles for the main area --}}
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        {{-- Styles Bootstrap --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- Global styles for menus --}}
        <link rel="stylesheet" href="{{ asset('css/menus.css') }}">

        {{-- Styles for a specific theme --}}
        @auth
            {{ auth()->user()->theme }}
            <link rel="stylesheet" href="{{ asset('css/themes/'.auth()->user()->theme.'.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('css/themes/standard.css') }}">
        @endauth

        {{-- Styles for a specific page --}}
        @yield('head_css')

        {{-- jQuery y Javascript Bootstrap --}}
        <script language="javascript" src="{{ asset('js/app.js') }}"></script>

        {{-- Select2 --}}
        <link href="{{ asset('select2/css/select2.min.css') }}" rel="stylesheet" />
        <script src="{{ asset('select2/js/select2.min.js') }}"></script>

        {{-- Javascript for a specific page --}}
        @yield('head_js')
    </head>
    <body>
        <div id="app">
            @include ('commons.navbar')
            @include('commons.side_menu_bar')
            <main class="global-main py-4">
                @yield('content')
            </main>
        </div>
        <form id="logout-form" action="{{ route('BM_logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <script language="javascript">
            // Variable global donde se carga el estado actual del menú lateral (desplegado o recogido)
            var sideMenuState;
            // PREPARACIÓN PARA PETICIONES AJAX
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            /* A LA CARGA DE CADA VISTA */
            $('document').ready(function (e) {
                // SELECTORES BASADOS EN Select2
                $('.select-2').select2();
                // PARA DETECTAR EL ESTADO ACTUAL DEL MENÚ LATERAL (DESPLEGADO O RECOGIDO) */
                var fullWidth = $('body').width();
                if (fullWidth < 767) return;
                $.ajax({
                    url: "{{ route('BM_rd-sm-state') }}",
                    method: 'get',
                })
                .done (function(status) {
                    if (status == 1) {
                        $("#sideMenuButton").addClass("open");
                        $("#menu-container").addClass("active");
                    } else {
                        $("#sideMenuButton").removeClass("open");
                        $("#menu-container").removeClass("active");
                    }
                    slideMenu();
                });
            });

            /* MECANISMO PARA ABRIR Y CERRAR EL MENÚ LATERAL */
            function slideMenu() {
                var activeState = $("#menu-container").hasClass("active");
                var fullWidth = $('body').width();
                if (fullWidth >= 767) { // Desktop size
                    if (activeState) {
                        $("#menu-container").animate({
                            left: "0",
                            width: "250px",
                        }, 400);
                        var newWidth = $(".global-main").width() - 216;
                        $(".global-main").animate({
                            left: "250px",
                            width: newWidth,
                        }, 400);
                    } else {
                        $("#menu-container").animate({left: "-100%"}, 400);
                        $(".global-main").animate({
                            left: "0",
                            width: "100%",
                        }, 400);
                    }
                } else { // Mobile size
                    if (activeState) {
                        $("#menu-container").animate({
                            left: "0",
                            width: fullWidth,
                        }, 400);
                    } else {
                        $("#menu-container").animate({
                            left: "-100%",
                            width: "0",
                        }, 400);
                    }
                }
            }

            // PARA ESTABLECER EL ESTADO DEL MENÚ LATERAL (ABIERTO O CERRADO) EN BASE DE DATOS
            function setUserMenuStatus()
            {
                var fullWidth = $('body').width();
                if (fullWidth < 767) return;
                var activeState = $("#menu-container").hasClass("active");
                $.ajax({
                    url: "{{ route('BM_ch-sm-state') }}",
                    method: 'post',
                    data: {
                        activeState: activeState,
                    },
                });
            }

            $('#logout_link').on('click', function (e) {
                e.preventDefault();
                $('#logout-form').submit();
            });

            $("#sideMenuButtonWrapper").click(function(e) {
                e.stopPropagation();
                e.preventDefault();
                $("#sideMenuButton").toggleClass("open");
                $("#menu-container").toggleClass("active");
                slideMenu();
                setUserMenuStatus();
            });

            $(".menu-list").find(".accordion-toggle").click(function(e) {
                e.preventDefault();
                $(this).next().toggleClass("open").slideToggle("fast");
                $(this).toggleClass("active-tab").find(".menu-link").toggleClass("active");
                $(".menu-list .accordion-content").not($(this).next()).slideUp("fast").removeClass("open");
                $(".menu-list .accordion-toggle").not($(this)).removeClass("active-tab").find(".menu-link").removeClass("active");
            });

            /* PARA PULSACIONES DE VER CLAVE, SI EXISTEN EN LA VISTA
            Y ESTÁ DISPONIBLE POR CONFIGURACIÓN
            LA CLASE pw-icon QUEDA RESERVADA PARA LOS COMPONENTES DE CLAVE EN CASO DE SER VISIBLES BAJO DEMANDA. */
            $('.pw-icon').on('click', function(e) {
                e.preventDefault();
                var component = $(this).data('id');
                if ($(this).find('i').hasClass('fa-eye')) {
                    $('#' + component).attr('type', 'text');
                } else {
                    $('#' + component).attr('type', 'password');
                }
                $(this).find('i').toggleClass('fa-eye').toggleClass('fa-eye-slash');
            });
        </script>
        @yield('final_js')
    </body>
</html>
