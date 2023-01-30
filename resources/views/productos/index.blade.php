<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="card m-4">
        <div class="card-title d-flex justify-content-center align-items-center">
            <h2>Productos</h2>
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
                                        href="{{route('productos.show',$producto)}}">Ver</a>

                                    <a class="btn btn-info btn-sm"
                                        href="">Editar</a>

                                    <form action="" method="post">
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
</body>

</html>
