@extends('Layouts.base')

@section('cabecera')

    <title>Plataforma de Administrador</title>

@stop


@section('borde')
    @include('content.borde')
@stop



@section('contenido')
    @include('content.index_content')
@stop


@section('scripts')

{{ HTML::script('js/app.js') }}

@stop