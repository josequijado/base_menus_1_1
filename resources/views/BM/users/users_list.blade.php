@extends('layouts.app')

@section('title', __('BM/general/users_list.Users list'))

@section('content')
<div class="container">
    <h1>{{ __('BM/general/users_list.Users list') }}</h1>

    <div class="form-group row">
        <div class="col-md-6">
            <label>{{ __('BM/general/users_list.Results per page') }}</label>
            <select class="form-control list_control" id="filter_per_page">
                <option value="10" {{ ($per_page == 10) ? " selected" : "" }}>10</option>
                <option value="20" {{ ($per_page == 20) ? " selected" : "" }}>20</option>
                <option value="50" {{ ($per_page == 50) ? " selected" : "" }}>50</option>
                <option value="100" {{ ($per_page == 100) ? " selected" : "" }}>100</option>
                <option value="0" {{ ($per_page == 0) ? " selected" : "" }}>{{ __('BM/general/users_list.All') }}</option>
            </select>
        </div>
        <div class="col-md-6">
            <label>{{ __('BM/general/users_list.Search') }}</label>
            <input type="text" class="form-control list_control" id="filter_search" value="{{ $search }}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4">
            <label>{{ __('BM/general/users_list.Sorting criteria') }}</label>
            <select class="form-control list_control" id="filter_field">
                <option value="username" {{ ($field == "username") ? " selected" : "" }}>{{ __('BM/general/users_list.Username') }}</option>
                <option value="first_name" {{ ($field == "first_name") ? " selected" : "" }}>{{ __('BM/general/users_list.First name') }}</option>
                <option value="surname" {{ ($field == "surname") ? " selected" : "" }}>{{ __('BM/general/users_list.Family name') }}</option>
                <option value="email" {{ ($field == "email") ? " selected" : "" }}>{{ __('BM/general/users_list.E-mail') }}</option>
                <option value="country_code" {{ ($field == "country_code") ? " selected" : "" }}>{{ __('BM/general/users_list.International code') }}</option>
                <option value="phone_number" {{ ($field == "phone_number") ? " selected" : "" }}>{{ __('BM/general/users_list.Phone number') }}</option>
            </select>
        </div>
        <div class="col-md-4">
            <label>{{ __('BM/general/users_list.Sorting order') }}</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-check-input list_control" name="ord" id="filter_ord_asc" {{ ($ord == "ASC") ? " checked" : "" }}>
            <label class="form-check-label" for="filter_ord_asc">
                {{ __('BM/general/users_list.Ascending') }}
            </label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-check-input list_control" name="ord" id="filter_ord_desc" {{ ($ord == "DESC") ? " checked" : "" }}>
            <label class="form-check-label" for="filter_ord_desc">
                {{ __('BM/general/users_list.Descending') }}
            </label>
        </div>
        <div class="col-md-4">
            <br>
            <input type="button" class="btn btn-primary btn-block btn-lg" id="botonDeBusqueda" value="{{ __('BM/general/users_list.Filter') }}">
        </div>
    </div>
    <form action="{{ route('master.BM_users_list') }}" method="post" id="form_search">
        @csrf
        <input type="hidden" id="per_page" name="per_page" value="">
        <input type="hidden" id="search" name="search" value="">
        <input type="hidden" id="field" name="field" value="">
        <input type="hidden" id="ord" name="ord" value="">
    </form>

    <table class="table table-striped table-bordered table-hover table-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col">{{ __('BM/general/users_list.ID') }}</th>
                <th scope="col">{{ __('BM/general/users_list.Username') }}</th>
                <th scope="col">{{ __('BM/general/users_list.Family name, First name') }}</th>
                <th scope="col">{{ __('BM/general/users_list.Scope') }}</th>
                <th scope="col">{{ __('BM/general/users_list.E-mail') }}</th>
                <th scope="col">{{ __('BM/general/users_list.International code and Phone number') }}</th>
                <th scope="col">{{ __('BM/general/users_list.Edit') }}</th>
                @if ((auth()->user()->scope == "M" || auth()->user()->scope == "A") && !session()->has('impersonater_user'))
                    <th scope="col">{{ __('BM/general/users_list.Impersonate') }}</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($usersList as $userItem)
                <tr>
                    <td>{{ $userItem->id }}</td>
                    <td>{{ $userItem->username }}</td>
                    <td>{{ $userItem->surname }}, {{ $userItem->first_name }}</td>
                    <td>{{ $userItem->scope }}</td>
                    <td>{{ $userItem->email }}</td>
                    <td>{{ $userItem->country_code }}-{{ $userItem->phone_number }}</td>
                    <td class="text-center">
                        <a href="{{ route('BM_edit-profile', ['user' => $userItem->id, ]) }}">
                            <span class="fas fa-user-edit"></span>
                        </a>
                    </td>
                    @if ((auth()->user()->scope == "M" || auth()->user()->scope == "A") && !session()->has('impersonater_user'))
                        <td class="text-center">
                            @if ($userItem->id != auth()->user()->id)
                                <a href="{{ route('BM_imp_user', ['user' => $userItem->id]) }}">
                                    <span class="fas fa-user-shield"></span>
                                </a>
                            @else
                                &nbsp;
                            @endif
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $usersList->links() }}

</div>
@endsection

@section('final_js')
    <script language="javascript">
        $("#botonDeBusqueda").on('click', function(e) {
            e.preventDefault();
            $("#per_page").val($("#filter_per_page").val());
            $("#search").val($("#filter_search").val());
            $("#field").val($("#filter_field").val());
            $("#ord").val(($("#filter_ord_asc").prop('checked') === true) ? "ASC" : "DESC");
            $("#form_search").submit();
        });
    </script>
@endsection
