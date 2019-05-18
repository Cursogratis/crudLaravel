<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
    <form action="/cliente/{{$cliente->id}}" method="POST">
        @method('PUT')
        @csrf
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">Nombre</label>
              <input type="text" class="form-control" id="validationDefault01" placeholder="nombre" name="txtnombre" value="{{ $cliente->nombre }}" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault02">Tipo Documento</label>
                <select name="txttipo" id="input" class="form-control">
                        <option value="{{ $cliente->tipo_documento }}" >seleccione</option>
                        <option value="101">Cedula</option>
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">Correo</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Correo" aria-describedby="inputGroupPrepend2" name="txtcorreo" value="{{ $cliente->correo }}" required>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationDefault03">Documento</label>
                <input type="number" class="form-control" id="validationDefault03" placeholder="Documento" name="txtdocumento" value="{{ $cliente->identificacion}}" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault04">Telefono</label>
                <input type="text" class="form-control" id="validationDefault04" placeholder="Telefono" name="txttelefono" value="{{ $cliente->telefono }}"required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault05">Direccion</label>
                <input type="text" class="form-control" id="validationDefault05" placeholder="Direccion" name="txtdireccion" value="{{ $cliente->direccion }}" required>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
          </form>
</div>
</body>
</html>