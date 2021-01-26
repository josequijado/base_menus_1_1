<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        {{-- Styles Bootstrap --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div class="container py-4">
            <div class="card">
                <div class="card-header">
                    {{ __('BM/exceptions.Session failure') }}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-left">
                            <img src="{{ asset('images/exceptions/csrf.png') }}" class="img-thumbnail" style="width: 400px;">
                        </div>
                        <div class="col-md-8">
                            {{ __('BM/exceptions.A session or security failure has happened') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('BM_index') }}" class="btn btn-danger btn-block">{{ __("BM/exceptions.I understand and accept") }}</a>
            </div>
        </div>
    </body>
</html>
