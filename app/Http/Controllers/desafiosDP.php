<?php

namespace App\Http\Controllers;

use App\desafio;
use Illuminate\Http\Request;

class desafiosDP extends Controller
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
        $rec = new desafio();
        $rec = $request->input();

       /*$rec->tipo = $request->input('tipo');
        $rec->instruccion = $request->input('instruccion');
        $rec->id_recetas = $request->input('id_recetas');
        $rec->cantidad = $request->input('cantidad');
        $rec->slug_receta = $request->input('slug_receta');
*/
        $rec->save();

        return "desafio Guardada";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function show(desafio $desafio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function edit(desafio $desafio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, desafio $desafio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function destroy(desafio $desafio)
    {
        //
    }
}
