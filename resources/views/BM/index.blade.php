@extends('layouts.app')

@section('title', env('APP_NAME'))

@section ('head_css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="container-fluid main-page">
    </div>
@endsection

