<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--<h1>{{$dato}}</h1> -->
<table>
<tr>
    <td>Codigo</td>
    <td>Nombre</td>
    <td>descripcion</td>
    <td>precio</td>
</tr>

<tr>
@foreach($dato as $value)
    <td>{{$value->idproductos}}</td>
    <td>{{$value->nombreproductos}}</td>
    <td>{{$value->descripcion_producto}}</td>
    <td>{{$value->precio_producto}}</td>
</tr>
@endforeach

</table>
</body>
</html>