@extends('layouts.app')

@section('elementos-navBar')
    <a  href="/inicio" ><p style="color: orange; font-size: 3em;"><</p></a>
    <h5 style="color: orange">TRIVIA DE COMIDA</h5>
@endsection

@section('content')

 <pregunta-componente></pregunta-componente>





@endsection
