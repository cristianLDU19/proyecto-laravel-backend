@extends('layouts.app')

@section('elementos-navBar')
    <a  href="/receta" ><p style="color: orange; font-size: 3em;"><</p></a>
    <h5 id="titulo_pag" style="color: orange">{{strtoupper($rec[0]->slug)}}</h5>
@endsection
@section('content')
<detalle-receta></detalle-receta>
@endsection