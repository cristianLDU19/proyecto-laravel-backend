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
        <h1 class="page-header" align="center">Editar Pasos</h1>

<div style="margin-left: 100px;margin-right: 100px">
        <form method ="POST" action = '/api/pasos/editar/{{$ingrediente->id}}' class="form-group" >
            @csrf
            <div class = form-group>
                <label>instruccion:</label>
                <input type="text" name="instruccion" class="form-control" value="{{$ingrediente->instruccion}}">
                <label>video:</label>
                <input type="text" name="video" class="form-control" value="{{$ingrediente->video}}">
                <label>duracion:</label>
                <input type="number" name="duracion" class="form-control" value="{{$ingrediente->duracion}}">
                <label>orden:</label>
                <input type="number" name="orden" class="form-control" value="{{$ingrediente->orden}}">
                <label>id_receta:</label>
                <input type="number" name="id_receta" class="form-control" value="{{$ingrediente->id_receta}}">
                <label>slug:</label>
                <input slug_receta="text" name="slug_receta" class="form-control" value="{{$ingrediente->slug_receta}}">
            </div>
            <input type="submit" value="Actualizar" class="btn-primary">
        </form>
</div>
    </div>
</body>
</html>