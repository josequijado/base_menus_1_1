@extends('layouts.app')

@section('title', __('BM/auth/register.Verification is required'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        {{ __('BM/auth/register.Verification is required') }}
                    </h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @if (env('MAIL_MUST_BE_VERIFIED') && null === auth()->user()->email_verified_at)
                            <li class="list-group-item">
                                <div id="solicita_confirmar_email">
                                    <p class="card-text">
                                        {{ __('BM/auth/register.You must confirm your e-mail') }}
                                    </p>
                                    <p class="card-text">
                                        {{ __('BM/auth/register.A mail with a verification link has been sent to you') }}<br>
                                        {{ __('BM/auth/register.Such link must be confirmed') }}
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <p class="card-text">
                                                {{ __('BM/auth/register.If you didn\'t get the mail, check your spam folder or ak for a new one') }}
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <button id="ask_for_new_mail" class="btn btn-primary btn-block btn-resend">
                                                {{ __('BM/auth/register.Resend mail') }}
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row"><br></div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <p class="card-text">
                                                {{ __('BM/auth/register.If you already confirmed your e-mail, you can recheck') }}
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <button id="recheck_if_mail_confirmed" class="btn btn-success btn-block">
                                                {{ __('BM/auth/register.Recheck e-mail') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div id="email_confirmado" class="alert alert-success" style="display:none;">
                                    {{ __('BM/auth/register.You have verified your e-mail successfully') }}
                                </div>
                            </li>
                        @endif

                        @if (env('PHONE_MUST_BE_VERIFIED') && null === auth()->user()->phone_verified_at)
                            <li class="list-group-item">
                                <div id="solicita_confirmar_telefono">
                                    <p class="card-text">
                                        {{ __('BM/auth/register.Your phone number must be verified') }}
                                    </p>
                                    <p class="card-text">
                                        {{ __('BM/auth/register.A SMS verification code has been sent to your phone') }}<br>
                                        {{ __('BM/auth/register.Type such code here') }}
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <label for="sms_code">
                                                {{ __('BM/auth/register.SMS code') }}
                                                <input type="text" class="form-control" id="sms_code">
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <br>
                                            <button id="check_sms_code" class="btn btn-success btn-block">
                                                {{ __('BM/auth/register.Verify SMS') }}
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row"><br></div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            {{ __('BM/auth/register.If you didn\'t get your SMS require for it again') }}
                                        </div>
                                        <div class="col-sm-4">
                                            <button id="ask_for_new_sms" class="btn btn-primary btn-block btn-resend">
                                                {{ __('BM/auth/register.Resend SMS') }}
                                            </button>
                                        </div>
                                    </div>
                                    <div id="sms_erroneo" class="alert alert-danger" style="display:none;">
                                        {{ __('BM/auth/register.The typed code is wrong') }}
                                    </div>
                                </div>
                                <div id="telefono_confirmado" class="alert alert-success" style="display:none;">
                                    {{ __('BM/auth/register.Your phone has been verified') }}
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("final_js")
    <script language="javascript">
        $('.btn-resend').on('click', function (e) {
            e.preventDefault();
            $('button').css('visibility', 'hidden');
            var conf_type = ($(this).prop('id') == "ask_for_new_mail") ? "mail" : "phone";
            $.ajax({
                async: true,
                url: "{{ route('BM_resend_verification') }}",
                method: "post",
                data: {
                    conf_type: conf_type,
                },
            })
            .done(function() {
                $('button').css('visibility', 'visible');
                alert((conf_type == "mail") ? "{{ __('BM/auth/register.A mail with a verification link has been sent to you') }}" : "{{ __('BM/auth/register.A SMS verification code has been sent to your phone') }}");
            });
        });

        // Para verificar si el correo electrrónico ha sido confirmado
        $("#recheck_if_mail_confirmed").on('click', function(e) {
            e.preventDefault();
            $('button').css('visibility', 'hidden');
            $.ajax({
                async: true,
                url: "{{ route('BM_recheck_email_verification') }}",
                method: "post",
            })
            .done(function(result) {
                $('button').css('visibility', 'visible');
                if (result == "N") {
                    alert("{{ __('BM/auth/register.You must confirm your e-mail') }}");
                } else {
                    $('#solicita_confirmar_email').css('display', 'none');
                    $('#email_confirmado').css('display', 'block');
                }
            });
        });

        // Para confirmar el teléfono mediante el SMS
        $('#check_sms_code').on('click', function(e) {
            e.preventDefault();
            $('button').css('visibility', 'hidden');
            $.ajax({
                async: true,
                url: "{{ route('BM_check_sms_code') }}",
                method: "post",
                data: {
                    typed_code: $('#sms_code').val(),
                },
            })
            .done(function(result) {
                $('button').css('visibility', 'visible');
                if (result == "N") {
                    $('#sms_erroneo').css('display', 'block');
                    $('#sms_code').addClass('is-invalid');
                } else {
                    $('#sms_erroneo, #solicita_confirmar_telefono').css('display', 'none');
                    $('#telefono_confirmado').css('display', 'block');
                }
            });
        });

    </script>
@endsection
