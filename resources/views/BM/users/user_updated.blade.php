@extends('layouts.app')

@section('title', __('BM/general/update_users.User updated title'))

@section('content')
<div class="container">
    <div class="card">
        <div class="card card-header">
            {{ __("BM/general/update_users.The user profile has been updated") }}
        </div>
        <div class="card card-body">
            <h4><strong>{{ __("BM/general/update_users.Current status") }}</strong></h4>
            <div class="row">
                <strong>{{ __("BM/general/update_users.First Name") }}:</strong>&nbsp;
                {{ $data["first_name"] }}
            </div>
            <div class="row">
                <strong>{{ __("BM/general/update_users.Surname") }}:</strong>&nbsp;
                {{ $data["surname"] }}
            </div>
            <div class="row">
                <strong>{{ __("BM/general/update_users.Username") }}:</strong>&nbsp;
                {{ $data["username"] }}
            </div>
            <div class="row">
                <strong>{{ __("BM/general/update_users.E-mail") }}:</strong>&nbsp;
                {{ $data["email"] }}
            </div>
            <div class="row">
                <strong>{{ __("BM/general/update_users.Language") }}:</strong>&nbsp;
                {{ __("BM/general/idiomas.".config("available_languages.idiomas_disponibles")[$data["language"]]["variable_name"]) }}
            </div>
            <div class="row">
                <strong>{{ __("BM/general/update_users.Int Phone Code") }}:</strong>&nbsp;
                {{ __(config("country_prefixes.countryCodes")[auth()->user()->language][$data["country_code"]]) }}
            </div>
            <div class="row">
                <strong>{{ __("BM/general/update_users.Phone number") }}:</strong>&nbsp;
                {{ $data["phone_number"] }}
            </div>
            <div class="row">
                <strong>{{ __("BM/general/update_users.Avatar") }}:</strong>
            </div>
            <div class="row">
                <img src="{{ asset('images/avatars/'.$avatar) }}" class="img-thumbnail" style="height: 200px;">
            </div>
        </div>
    </div>
    <div class="card-footer">
        <input type="button" class="btn btn-primary btn-block" value="Volver" id="BM_returnButton">
    </div>
</div>
@endsection

@section('final_js')
<script language="javascript">
    $('#BM_returnButton').on('click', function(e) {
        e.preventDefault();
        window.history.go(-2);
    });
</script>
@endsection
