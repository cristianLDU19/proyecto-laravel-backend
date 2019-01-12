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
        <h1 class="page-header" align="center">Editar Preguntas</h1>

<div style="margin-left: 100px;margin-right: 100px">
        <form method ="POST" action = '/preguntas/editar/{{$ingrediente->id}}' class="form-group" >
            @csrf
            <div class = form-group>
                <label>descripcion:</label>
                <input type="text" name="descripcion" class="form-control" value="{{$ingrediente->descripcion}}">
                <label>opcion1:</label>
                <input type="text" name="opcion1" class="form-control" value="{{$ingrediente->opcion1}}">
                <label>opcion2:</label>
                <input type="text" name="opcion2" class="form-control" value="{{$ingrediente->opcion2}}">
                <label>opcion3:</label>
                <input type="text" name="opcion3" class="form-control" value="{{$ingrediente->opcion3}}">
                <label>opcion4:</label>
                <input type="text" name="opcion4" class="form-control" value="{{$ingrediente->opcion4}}">
                <label>correcta:</label>
                <input type="text" name="correcta" class="form-control" value="{{$ingrediente->correcta}}">
                <label>puntaje:</label>
                <input type="number" name="puntaje" class="form-control" value="{{$ingrediente->puntaje}}">
                <label>foto:</label>
                <input type="text" name="foto" class="form-control" value="{{$ingrediente->foto}}">
                <label>slug:</label>
                <input type="text" name="slug" class="form-control" value="{{$ingrediente->slug}}">
            </div>
            <input type="submit" value="Actualizar" class="btn-primary">
        </form>
</div>
    </div>
</body>
</html>