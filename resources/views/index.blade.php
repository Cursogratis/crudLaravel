<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="">USCO</a>
    </div>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nombre</th>
            <th scope="col">telefono</th>
            <th scope="col">tipo documento</th>
            <th scope="col">documento</th>
            <th scope="col">direccion</th>
            <th scope="col">correo</th>
        </tr>
    </thead>
    <tbody>
    @foreach($cliente as $cliente)
        <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente->nombre}} </td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->tipo_documento}}</td>
            <td>{{$cliente->identificacion}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->correo}}</td>
            <td><button type="button" class="btn btn-primary">editar</button></td>
            <td><button type="button" class="btn btn-primary">eliminar</button></td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="/cliente/create"><button type="button" class="btn btn-primary btn-lg btn-block">Agregar</button></a>
</div>
</body>
</html>