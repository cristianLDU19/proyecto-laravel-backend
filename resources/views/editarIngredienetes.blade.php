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
        <h1 class="page-header" align="center">Editar Ingrediente</h1>

<div style="margin-left: 100px;margin-right: 100px">
        <form method ="POST" action = '/ingredientes/editar/{{$ingrediente->id}}' class="form-group" >
            @csrf
            <div class = form-group>
                <label>Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{$ingrediente->nombre}}">
                <label>tipo:</label>
                <input type="text" name="tipo" class="form-control" value="{{$ingrediente->tipo}}">
                <label>instruccion:</label>
                <input type="text" name="instruccion" class="form-control" value="{{$ingrediente->instruccion}}">
                <label>id_recetas:</label>
                <input type="number" name="id_recetas" class="form-control" value="{{$ingrediente->id_recetas}}">
                <label>cantidad:</label>
                <input type="number" name="cantidad" class="form-control" value="{{$ingrediente->cantidad}}">
                <label>slug_receta:</label>
                <input type="text" name="slug_receta" class="form-control" value="{{$ingrediente->slug_receta}}">
            </div>
            <input type="submit" value="Actualizar" class="btn-primary">
        </form>
</div>
    </div>
</body>
</html>