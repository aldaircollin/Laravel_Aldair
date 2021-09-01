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
    <td>Apellido</td>
</tr>

<tr>
@foreach($dato as $value)
    <td>{{$value->idclientes}}</td>
    <td>{{$value->nombre}}</td>
    <td>{{$value->apellido}}</td>
</tr>
@endforeach

</table>
  
</body>
</html>