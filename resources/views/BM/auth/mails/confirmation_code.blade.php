<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('mails.mails_styles')
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="{{ env('APP_URL') }}">
                        <img src="{{ asset('images/logo.png') }}" style="width: 100%; border: none;">
                    </a>
                </div>
            </div>
            <div class="row">
                {{  __('BM/auth/login.The following code is for access verification:') }}
            </div>
            <div class="alert alert-primary">
                {{ $code }}
            </div>
            <div class="row">
                {{  __('BM/auth/login.Type it where you are requested for it.') }}
            </div>
        </div>
    </body>
</html>
