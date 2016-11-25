@extends('admin.layouts.layout')

@section('title', 'Inicio')
@section('content')
    <div class="col-md-2">
        <div class="zero box col-xs-12">
            <div class="zero box-head red"></div>
            <div class="box-avatar"><img src="{{ asset('imagenes/logo.png') }}" alt="logo.png" width="50px" height="50px" class="img-circle center-block"></div>
            <p class="text-center">{{ ucwords(Auth::user()->name) }}</p>
        </div>
    </div>
    <div class="col-md-7">

    </div>
    <div class="col-md-3">

    </div>
@endsection