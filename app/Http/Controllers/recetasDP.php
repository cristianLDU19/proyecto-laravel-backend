<?php

namespace App\Http\Controllers;
use App\ingrediente;
use App\paso;

use App\receta;
use Illuminate\Http\Request;

class recetasDP extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $listaRecetas = receta::all();

        return $listaRecetas;
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rec = new receta();
        $rec->nombre = $request->input('nombre');
        $rec->foto = $request->input('foto');
        $rec->modalidad = $request->input('modalidad');
        $rec->numero_pasos = $request->input('numero_pasos');
        $rec->costo = $request->input('costo');
        $rec->slug = $request->input('slug');
        $rec->save();

        return "Receta Guardada";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\receta $receta
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $rec = receta::where('slug', $slug)->get();
        return view('recetaDetalle',compact('rec'));

    }

    public function showinfo($slug)
    {

        $rec = receta::where('slug', $slug)->get();
        return $rec ;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\receta $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(receta $receta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\receta $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, receta $receta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\receta $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(receta $receta)
    {
        //
    }

    public function mostrarIngredientes($id_receta)
    {
        $ingre = ingrediente::where('id_recetas', $id_receta)->get();

        return $ingre;
    }

    public function obtenerNumeroPasos($slug)
    {
        $rec = receta::select('numero_pasos')->where('slug', $slug)->get();
        return $rec;
    }


//cuenta atras
    function countDown()
    {
        echo "
";

    }
}



/*FUNCION PARA CRONOMETRO PARA ATRAS
 *
 toHour=1;
toMinute=0;
toSecond=0;

//cuenta atras
function countDown()
{
	toSecond=toSecond-1;
	if(toSecond<0)
	{
		toSecond=59;
		toMinute=toMinute-1;
	}
	form.second.value=toSecond;

	if(toMinute<0)
	{
		toMinute=59;
		toHour=toHour-1;
	}
	form.minute.value=toMinute;

	form.hour.value=toHour;
	if(toHour<0)
	{
		//final
		form.second.value=0;
		form.minute.value=0;
		form.hour.value=0;
	}else{
		setTimeout("countDown()",1000);
	}
}
 *
 */


