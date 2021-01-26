@extends('layouts.app')

@section('title', __('BM/auth/login.Login'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BM/auth/login.Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('BM_login') }}" id="login_form">
                        @csrf

                        <div class="form-group row">
                            <label for="identifier" class="col-md-4 col-form-label text-md-right">{{ __('BM/auth/login.Username or E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="identifier" type="text" class="form-control @error('identifier') is-invalid @enderror" name="identifier" value="{{ old('identifier') }}" autocomplete="identifier" autofocus>

                                @error('identifier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('BM/auth/login.Password') }}</label>

                            <div class="col-md-6">
                                @component('components.password')
                                    @slot('id') password @endslot
                                    @slot('name') password @endslot
                                    @slot('class') @error('password') is-invalid @enderror @endslot
                                @endcomponent

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('BM/auth/login.Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.BM_request') }}">
                                        {{ __('BM/auth/login.Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer">
                    <button id="login_button" class="btn btn-primary btn-block">
                        {{ __('BM/auth/login.Login') }}
                    </button>
                    <button id="wait_button" class="btn btn-primary btn-block disabled" style="display:none">
                        {{ __('BM/auth/login.Processing') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('final_js')
    <script language="javascript">
        $('#login_button').on ('click', function (e) {
            e.preventDefault();
            $('#login_button').css('display', 'none');
            $('#wait_button').css('display', 'block');
            $('#login_form').submit();
        });
    </script>
@endsection



