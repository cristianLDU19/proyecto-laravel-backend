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
        <h1 class="page-header" align="center">Editar Recetas</h1>

<div style="margin-left: 100px;margin-right: 100px">
        <form method ="POST" action = '/api/recetas/editar/{{$ingrediente->id}}' class="form-group" >
            @csrf
            <div class = form-group>
                <label>Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{$ingrediente->nombre}}">
                <label>foto:</label>
                <input type="text" name="foto" class="form-control" value="{{$ingrediente->foto}}">
                <label>modalidad:</label>
                <input type="text" name="modalidad" class="form-control" value="{{$ingrediente->modalidad}}">
                <label>costo:</label>
                <input type="number" name="costo" class="form-control" value="{{$ingrediente->costo}}">
                <label>numero_pasos:</label>
                <input type="number" name="numero_pasos" class="form-control" value="{{$ingrediente->numero_pasos}}">
                <label>slug:</label>
                <input type="text" name="slug" class="form-control" value="{{$ingrediente->slug}}">
            </div>
            <input type="submit" value="Actualizar" class="btn-primary">
        </form>
</div>
    </div>
</body>
</html>