<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ver producto</title>
</head>
<body>
    <h1>Nombre: {{$producto->nombre}}</h1>
    <h1>Costo: {{$producto->costo}}</h1>
    <h1>Precio: {{$producto->precio}}</h1>
    <h1>Creado el: {{$producto->created_at}}</h1>

</body>
</html>