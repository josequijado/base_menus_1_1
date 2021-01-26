@extends('layouts.app')

@section('title', __('BM/general/update_users.Update user title'))

@section('content')
<div class="container">
    <form id="updating_form" method="post" action="{{ route('BM_update-profile') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <input type="hidden" name="MAX_FILE_SIZE" value="200000">

        <div class="row justify-content-center"> {{-- Área del formulario --}}
            <div class="col-md-5"> {{-- Parte superior (izquierda) del formulario --}}
                <div class="form-group row">
                    <label for="first_name">{{ __('BM/general/update_users.First Name') }}</label>
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ (old('first_name')) ? : $user->first_name }}">
                    @error('first_name')
                        <div class="row invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="surname">{{ __('BM/general/update_users.Surname') }}</label>
                    <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname" value="{{ (old('surname')) ? : $user->surname }}">
                    @error('surname')
                        <div class="row invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="username">{{ __('BM/general/update_users.Username') }}</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ (old('username')) ? : $user->username }}">
                    @error('username')
                        <div class="row invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="email">{{ __('BM/general/update_users.E-mail') }}</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ (old('email')) ? : $user->email }}">
                    @error('email')
                        <div class="row invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                @if (count($scopes) > 1)
                    <div class="form-group row">
                        <label for="scope">{{ __('BM/general/update_users.Scope') }}</label>
                        <select id="scope" name="scope" class="form-control @error('scope') is-invalid @enderror">
                            @foreach ($scopes as $keyScope=>$scope)
                                <option value={{ $keyScope }} {{ old('scope') ? ((old('scope') == $keyScope) ? 'selected' : '') : (($keyScope == $user->scope) ? 'selected' : '') }}>
                                    {{ __('BM/auth/register.scopes.'.$scope) }}
                                </option>
                            @endforeach
                        </select>
                        @error('scope')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                @else
                    <input type="hidden" name="scope" value="U">
                @endif

                @if (count($idiomas) > 1)
                    <div class="form-group row">
                        <label for="language">{{ __('BM/general/update_users.Language') }}</label>
                        <select id="language" name="language" class="form-control select-2 @error('language') is-invalid @enderror">
                            @foreach ($idiomas as $idioma)
                                <option value = {{ $idioma['value'] }} {{ old('language') ? ((old('language') == $idioma['value']) ? 'selected' : '') : (($user->language == $idioma['value']) ? 'selected' : '') }}>
                                    {{ __('BM/general/idiomas.'.$idioma['text']) }}
                                </option>
                            @endforeach
                        </select>
                        @error('language')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                @else
                    <input type="hidden" name="language" value="es">
                @endif

                @if(env('PHONE_IN_REGISTER'))
                    <div class="form-group row">
                        <label for="country_code">{{ __('BM/general/update_users.Int Phone Code') }}</label>
                        <select id="country_code" name="country_code" class="form-control select-2 @error('country_code') is-invalid @enderror">
                            @foreach($prefixes as $keyPrefix=>$prefix)
                                <option value={{ $keyPrefix }} {{ old('country_code') ? ((old('country_code') == $keyPrefix) ? 'selected' : '') : (($keyPrefix == $user->country_code) ? 'selected' : '') }}>
                                    {{ $prefix }}
                                </option>
                            @endforeach
                        </select>
                        @error('country_code')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="phone_number">{{ __('BM/general/update_users.Phone number') }}</label>
                        <input id="phone_number" name="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" value="{{ (old('phone_number')) ?  : $user->phone_number }}">
                        @error('phone_number')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                @endif
            </div> {{-- Parte superior (izquierda) del formulario --}}

            <div class="col-md-2"></div>

            <div class="col-md-5"> {{-- Parte inferior (derecha) del formulario --}}
                <div class="card">
                    <div class="card card-header">
                        <h5>{{ __('BM/general/update_users.Password') }}</h5>
                    </div>
                    <div class="card card-body">
                        <p>
                            {{ __('BM/general/update_users.Type the new password if you want to change it') }}
                            {{ __('BM/general/update_users.In that case, both \'Password\' and \'Password confirmation\' must match') }}
                            <br>
                            {{ __('BM/general/update_users.If you prefer keep the current password, keep both fields unfilled') }}
                        </p>
                        <div class="form-group row">
                            <label for="password">{{ __('BM/general/update_users.Password') }}</label>
                            @component('components.password')
                                @slot('id') password @endslot
                                @slot('name') password @endslot
                                @slot('class') @error('password') is-invalid @enderror @endslot
                            @endcomponent
                            @error('password')
                                <span class="invalid-feedback" style="display:inline;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm">{{ __('BM/general/update_users.Password confirmation') }}</label>
                            @component('components.password')
                                @slot('id') password_confirmation @endslot
                                @slot('name') password_confirmation @endslot
                                @slot('class') @endslot
                            @endcomponent
                        </div>
                    </div>
                </div> {{-- card de contraseña --}}

                <div class="row"><br></div>
                <div class="form-group row">
                    <label for="avatar">{{ __('BM/general/update_users.Avatar') }}</label>
                    <input type="file" id="avatar" name="avatar" class="form-control" accept="image/jpeg">
                    <h6>{{ __('BM/general/update_users.Just a type JPG image (max size 200Kb)') }}</h6>
                </div>

                <div class="form-group row">
                    <img id="avatar_image" src="{{ asset('images/avatars/'.$user->avatar) }}" class="img-thumbnail" style="height: 200px;">
                </div>
            </div> {{-- Parte inferior (derecha) del formulario --}}
        </div> {{-- Área del formulario --}}

        <div class="form-group row"> {{-- Área del botón de envío --}}
            <input type="submit" class="btn btn-primary btn-block" value="{{ __('BM/general/update_users.Update user profile') }}">
        </div>
    </form>
</div>
@endsection

@section('final_js')
    <script language="javascript">
        $('#avatar').on('change', function(e) {
            if ($(this)[0].files[0] == null) {
                $('#avatar_image').attr('src', "{{ asset('images/avatars/'.$user->avatar) }}");
                return;
            }
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#avatar_image').attr('src', reader.result);
            }
            reader.readAsDataURL($(this)[0].files[0]);
        });
    </script>
@endsection
