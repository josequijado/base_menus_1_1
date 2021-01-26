@extends ('layouts.app')

@section('title', __('Data verification title'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="alert alert-warning">
                            @if ($system == 'mail') {{-- Envío por correo --}}
                                {{ __("BM/auth/login.Type the code we've sent into your e-mail, to authorise your access.") }}
                            @else {{-- Envío por SMS --}}
                                {{ __("BM/auth/login.Type the code we've sent by SMS, to authorise your access.") }}
                            @endif
                        </div>
                    </div> {{-- Final de la card-header --}}

                    <div class="card-body">
                        <form action="{{ route ('BM_confirm2fa', $user) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="typed_code">{{ __("BM/auth/login.Access confirmation code") }}</label>
                                <input type="text" class="form-control{{ $errors->has('typed_code') ? ' is-invalid' : '' }}" id="typed_code" name="typed_code" value="{{ old('typed_code') }}">
                            </div>
                            @if ($errors->has('typed_code'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('typed_code') }}
                                </div>
                            @endif
                            <div class="row" id="buttons_row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-block" value={{ __("BM/auth/login.Send") }}>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="button" class="btn btn-warning btn-block resend" value={{ __("BM/auth/login.Resend confirmation code") }}>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="waiting_row" style="display:none">
                                <input type="button" class="btn btn-primary btn-block disabled" value={{ __("BM/auth/login.Processing") }}>
                            </div>
                        </form>

                        <form id="resend_form" method="post" action="{{ route ('BM_resend2fa', $user) }}"> {{-- Formulario de reenvío de código --}}
                            @csrf
                            <input type="hidden" name="system" value="{{ $system }}">
                        </form>
                    </div> {{--  Final del card-body --}}
                </div> {{-- Final de card --}}
            </div> {{-- Final de col-md-8 --}}
        </div> {{-- Final de row justify-content-center --}}
    </div> {{-- Final de container --}}
@endsection

@section('final_js')
    <script language="javascript">
        $('.resend').on('click', function(e) {
            e.preventDefault();
            $('#buttons_row').css('display', 'none');
            $('#waiting_row').css('display', 'block');
            $('#resend_form').submit();
        });
    </script>
@endsection
