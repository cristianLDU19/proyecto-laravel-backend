@extends('layouts.app')

@section('elementos-navBar')
    <p style="color: orange"><</p>
    <a class="navbar-brand" href="{{ url('/inicio') }}">
        Juegos
    </a>
    <p style="color: orange">|</p>
    <a class="navbar-brand " href="{{ url('/receta') }}" style="color: orange">
        Recetas
    </a>
@endsection

@section('content')
    <recetas></recetas>
@endsection
