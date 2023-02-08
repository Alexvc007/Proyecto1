@extends('adminlte::page')

@section('title', 'Ver')

@section('content_header')
    
@stop

@section('content')
    <h1>Nombre: {{ $producto->nombre }}</h1>
    <h1>Costo: {{ $producto->costo }}</h1>
    <h1>Precio: {{ $producto->precio }}</h1>
    <h1>Creado el: {{ $producto->created_at }}</h1>
@stop

@section('css')

@stop

@section('js')

@stop
