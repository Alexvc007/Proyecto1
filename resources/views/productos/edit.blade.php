<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Producto</title>
    {{--  Agregar mis propios estilos carpeta: /public/css/  --}}
    {{--  <link rel="stylesheet" href="{{asset('css/style.css')}}">  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
</head>
<body>
    <a class="btn btn-dark mx-4 my-2" href="{{route('productos.index')}}">Volver atras</a>
    <div class="card m-4">
        <div class="card-header d-flex justify-content-center">
            Editar Producto
        </div>
        <div class="card-body">
            <form action="{{route('productos.update',$producto)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Nombre del producto:</label>
                    <input type="text" name="nombre" value="{{old('nombre',$producto->nombre)}}">
                    @error('nombre')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Coste del producto:</label>
                    <input type="number" name="costo" value="{{old('costo',$producto->costo)}}">
                    @error('costo')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Precio del producto:</label>
                    <input type="number" name="precio" value="{{old('precio',$producto->precio)}}">
                    @error('precio')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>