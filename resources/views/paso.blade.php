<html>
<head>
<body>
<div class="container">
    @foreach($pa as $paso)
    <p>

            INSTRUCCIÓN: {{$paso['instruccion']}}<br>
            DURACIÓN: {{$paso['duracion']}} minutos

    </p>
    <input method = 'GET' action="../pregunta/" type="button" value="Siguiente"  >
        <div ></div>

    @endforeach

</div>
</body>
</head>
</html>