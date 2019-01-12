<?php

namespace App\Http\Controllers;

use App\paso;

use Illuminate\Http\Request;

class pasosDP extends Controller
{

    public static function devolverPasos($slugReceta)
    {
        $listaPasos=paso::where('slug_receta', $slugReceta)->orderBy('orden')->get();


        return $listaPasos;
    }

    public function ordenPasos($slugReceta,$num)
    {
        $pa=paso::where('slug_receta', $slugReceta)->where('orden', $num)->get();


        return view('paso',compact('pa'));
    }


    public function store(Request $request)
    {
        $rec = new paso();
        $rec->id_receta = $request->input('id_receta');
        $rec->instruccion = $request->input('instruccion');
        $rec->orden = $request->input('orden');
        $rec->duracion = $request->input('duracion');
        $rec->video = $request->input('video');
        $rec->slug_receta = $request->input('slug_receta');

        $rec->save();

        return "paso Guardada";

    }
    public function destroy( $id)
    {
        $user = paso::find($id);
        $user->delete();
    }

    public function index()
    {
        return paso::all();
    }

    public function edit($id)
    {
       // $ingrediente = paso::find($id);
        return $id;
        //return view ('editarPasos',compact('ingrediente'));
    }
    public function update(Request $request,  $id)
    {
        $rec = paso::find($id);
        $rec->id_receta = $request->input('id_receta');
        $rec->instruccion = $request->input('instruccion');
        $rec->orden = $request->input('orden');
        $rec->duracion = $request->input('duracion');
        $rec->video = $request->input('video');
        $rec->slug_receta = $request->input('slug_receta');
        $rec->save();

        return "paso Actualizado";

    }

}
