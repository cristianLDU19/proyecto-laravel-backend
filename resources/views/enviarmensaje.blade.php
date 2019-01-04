
@extends('layouts.app')

@section('elementos-navBar')

    <p style="color: orange"><</p>
    <a class="navbar-brand" href="{{ url('/inicio') }}" style="color: orange">
        Juegos
    </a>
    <p style="color: orange">|</p>
    <a class="navbar-brand " href="{{ url('/receta') }}" >
        Recetas
    </a>

@endsection

@section('content')
    <div align="center">
        <h1 style="margin: 50px; " class="page-header" id="titulo" align="center">Enviar mensaje</h1>
        <form method ="POST" action = '/enviar/' class="form-group" id="formulario" style="width: 50%">
            {{csrf_field()}}
            <div class = form-group>

                <input type="text" name="categoria" class="form-control input" >

            </div>
            <input type="submit" id="insertar" value="Enviar" class="btn btn-success " ></input>
        </form>
    </div>
@endsection
