@extends('layouts.app')

@section('title', __('BM/auth/register.User has been created'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert alert-success">
                    {{ __('BM/auth/register.User has been created') }}
                </div>

                <div class="card-body">
                    {{ __('BM/auth/register.Before proceeding must verify data') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
