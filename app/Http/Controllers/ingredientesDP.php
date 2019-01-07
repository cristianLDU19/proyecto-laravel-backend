<?php

namespace App\Http\Controllers;

use App\ingrediente;
use Illuminate\Http\Request;

class ingredientesDP extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $rec = new ingrediente();
        $rec->nombre = $request->input('nombre');
        $rec->tipo = $request->input('tipo');
        $rec->instruccion = $request->input('instruccion');
        $rec->id_recetas = $request->input('id_recetas');
        $rec->cantidad = $request->input('cantidad');
        $rec->slug_receta = $request->input('slug_receta');

        $rec->save();

        return "ingrediente Guardada";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ingrediente  $ingrediente
     * @return \Illuminate\Http\Response
     */
    public function show($slugReceta)
    {
        $lista = ingrediente::where('slug-receta',$slugReceta)->get();
        return $lista;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ingrediente  $ingrediente
     * @return \Illuminate\Http\Response
     */
    public function edit(ingrediente $ingrediente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ingrediente  $ingrediente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ingrediente $ingrediente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ingrediente  $ingrediente
     * @return \Illuminate\Http\Response
     */
    public function destroy(ingrediente $ingrediente)
    {
        //
    }
}
