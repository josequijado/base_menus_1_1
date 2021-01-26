@extends('layouts.app')

@section('title', __('BM/auth/register.Your e-mail has been verified'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BM/auth/register.Your e-mail has been verified') }}</div>

                <div class="card-body">
                    {{ __('BM/auth/register.You have verified your e-mail successfully') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
