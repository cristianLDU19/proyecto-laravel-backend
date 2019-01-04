<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Guzzlehttp\Exception\GuzzleException;

class coneccionExterna extends Controller
{
    //


    public function obtenerListadoExterno()
    {
        $cliente = new Client();
        $resultado = $cliente->get('http://172.16.0.169:8000/api/listado');

        $estu = json_decode($resultado->getbody());


      return view('anita',compact('estu'));

    }
}
