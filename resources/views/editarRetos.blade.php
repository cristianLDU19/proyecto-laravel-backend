<html>
<head>
    <title>
        @yield('titulo')
    </title>
    <!-- La siguiente linea es para utilizar BootStrap -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
          crossorigin="anonymous">
</head>

<body>
    <div>
        <h1 class="page-header" align="center">Editar Retos</h1>

<div style="margin-left: 100px;margin-right: 100px">
        <form method ="POST" action = '/api/retos/editar/{{$ingrediente->id}}' class="form-group" >
            @csrf
            <div class = form-group>
                <label>Descripcion:</label>
                <input type="text" name="descripcion" class="form-control" value="{{$ingrediente->descripcion}}">
            </div>
            <input type="submit" value="Actualizar" class="btn-primary">
        </form>
</div>
    </div>
</body>
</html>