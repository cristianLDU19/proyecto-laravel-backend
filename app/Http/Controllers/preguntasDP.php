<?php

namespace App\Http\Controllers;

use App\pregunta;
use App\User;
use Illuminate\Http\Request;

class preguntasDP extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rec = new pregunta();
       // $rec = $request->all();

        $rec->descripcion = $request->input('descripcion');
        $rec->opcion1 = $request->input('opcion1');
        $rec->opcion2 = $request->input('opcion2');
        $rec->opcion3 = $request->input('opcion3');
        $rec->opcion4 = $request->input('opcion4');
        $rec->correcta = $request->input('correcta');
        $rec->puntaje = $request->input('puntaje');
        $rec->foto = $request->input('foto');
        $rec->slug = $request->input('slug');


        $rec->save();

        return "Receta Guardada";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show($pregunta)
    {
        $resultado = pregunta::find($pregunta);
        return $resultado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(pregunta $pregunta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pregunta $pregunta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(pregunta $pregunta)
    {
        //
    }

/*
    public function buscarPregunta($id)
    {

        $resultado = pregunta::where('id',$id)->get();
        return $resultado;
    }
*/

    public function sleccionarPreguntaAleatoria()
    {

        $encontrado = false;
        //$preg = null;

        while(!$encontrado)
        {
            $num = count(pregunta::all());
            $aleatorio= rand(1,$num);

            $preg = pregunta::where('id',$aleatorio)->get();

            if($preg->isNotEmpty())
            {
                $encontrado = true;
            }

        }

        //return ();
        return $preg;

    }

    public function actualizarPuntaje($puntos,$id)
    {
        $jugador =  User::find($id);
        $puntajeActual =$jugador->puntaje;
        $puntajeResultado=$puntajeActual + $puntos;
        $jugador->puntaje=$puntajeResultado;
        $jugador->save();

        return "El puntaje se actualizo correctamente";

    }

    public function corregirPregunta($id,$respuesta)
    {

        $preg = pregunta::find($id);
        $correcto =  $preg->correcta;
        $nombreUsuario = 'cristianLDU19';
        $id_Usuario = 1;

        if($correcto == $respuesta)
        {
            $puntos = $preg->puntaje;
            $this->actualizarPuntaje($puntos,$id_Usuario);
            $acierto ="CORRECTO";
        }
        else {
            $acierto = "INCORRECTO";

        }
        return $acierto ;


    }



}

