@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')

@stop

@section('content')
<br>
<div class="card m-4">
    <div class="card-title">
        <h2 class="d-flex justify-content-center align-items-center"><b>Productos</b></h2>
        <div class="d-flex justify-content-end align-items-end px-4">
            <a href="{{route('productos.create')}}" class="btn btn-primary">Registrar Producto</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-striped" id="materias">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Precio</th>
                        <th scope="col" width="15%">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->costo }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('productos.show', $producto) }}">Ver</a>

                                <a class="btn btn-info btn-sm" href="{{route('productos.edit',$producto)}}">Editar</a>

                                <form action="{{route('productos.destroy',$producto)}}" method="post">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')"
                                        value="Borrar">Eliminar</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
