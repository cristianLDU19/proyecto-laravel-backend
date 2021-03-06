<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reto;

class retosDP extends Controller
{


    public function retoAleatorio()
    {

        $encontrado = false;


        while(!$encontrado)
        {
            $num = count(reto::all());
            $aleatorio= rand(1,$num);

            $penitencia = reto::where('id',$aleatorio)->get();

            if($penitencia->isEmpty())
            {
                $encontrado = false;
            }
            else
            {
                $encontrado = true;
            }

        }

        return $penitencia;
    }
    public function store(Request $request)
    {
        $ret = new reto();
        $ret->descripcion = $request->input('descripcion');
        $ret->save();

        return "Reto Guardada";
    }

    public function destroy( $id)
    {
        $user = reto::find($id);
        $user->delete();
    }

    public function index()
    {
        return reto::all();
    }

    public function edit( $id)
    {
        $ingrediente = reto::find($id);
        return view ('editarRetos',compact('ingrediente'));
    }
    public function update(Request $request,  $id)
    {
        $ingrediente = reto::find($id);
        $ingrediente->descripcion = $request->input('descripcion');
        $ingrediente->save();

        return "Reto actualizado";

    }
}
