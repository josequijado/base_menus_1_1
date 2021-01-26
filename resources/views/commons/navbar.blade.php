<nav class="navbar navbar-expand-md navbar-light shadow-sm menuBar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" class="main-logo">
        </a>
        @include ('commons.side_menu_button')
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('BM/Toggle navigation') }}">
            <i class="fas fa-bars togglerIcon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- Left Side Of Navbar --}}
            <ul class="navbar-nav mr-auto">
            </ul>
            {{-- Right Side Of Navbar --}}
            <ul class="navbar-nav ml-auto">
                @include('commons.theme_menu')
                @include('commons.language_menu')
                {{-- Authentication Links --}}
                @include('commons.user_menu')
            </ul>
        </div>
    </div>
</nav>
