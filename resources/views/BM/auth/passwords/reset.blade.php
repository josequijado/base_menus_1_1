@extends('layouts.app')

@section('title', __('BM/auth/login.Reset Password'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BM/auth/login.Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.BM_update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('BM/auth/login.E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>

                                @error('email')
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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('BM/auth/login.Confirm Password') }}</label>

                            <div class="col-md-6">
                                @component('components.password')
                                    @slot('id') password-confirm @endslot
                                    @slot('name') password_confirmation @endslot
                                    @slot('class') @endslot
                                @endcomponent
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('BM/auth/login.Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
