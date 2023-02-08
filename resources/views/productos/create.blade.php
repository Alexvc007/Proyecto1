@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')

@stop

@section('content')
<a class="btn btn-dark mx-4 my-2" href="{{route('productos.index')}}">Volver atras</a>
<div class="card m-4">
    <div class="card-header d-flex justify-content-center">
        Registrar Producto
    </div>
    <div class="card-body">
        <form action="{{route('productos.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nombre del producto:</label>
                <input type="text" name="nombre" value="{{old('nombre')}}">
                @error('nombre')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Coste del producto:</label>
                <input type="number" name="costo" value="{{old('costo')}}">
                @error('costo')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Precio del producto:</label>
                <input type="number" name="precio" value="{{old('precio')}}">
                @error('precio')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
