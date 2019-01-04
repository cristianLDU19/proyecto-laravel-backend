<html>
    <head>
        <body>
                <div class="container">
                    <li class="list-group">
                        @foreach($listaPasos as $paso)
                            <ol class="list-group-item">
                                {{$paso->instruccion}}
                            </ol>
                        @endforeach

                    </li>
                </div>
        </body>
    </head>
</html>