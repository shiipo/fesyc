@extends('front.layouts.layout')

@section('title', 'Inicia Sesión')

@section('content')
    <div class="row">
        @if(count($errors) > 0)
            <div class="col-sm-4 col-sm-offset-4">
                @include('errors.general')
            </div>
        @endif
        <div class="col-sm-4 col-sm-offset-4">
        <div class="panel panel-default">
            <div class="panel-body">
            {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}
            <div class="form-group text-center">
                <i class="fa fa-user-circle fa-4x"></i>
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Correo') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Eléctronico']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Clave') !!}
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '******']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Ingresar', ['class' => 'btn btn-primary pull-right']) !!}
            </div>
            {!! Form::close() !!}
            </div>
        </div>
        </div>
    </div>
@endsection