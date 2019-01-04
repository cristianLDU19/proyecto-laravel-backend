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


}
