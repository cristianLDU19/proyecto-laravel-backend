<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pregunta','preguntasDP@sleccionarPreguntaAleatoria');

Route::get('pregunta/corregir/{id}/{respuesta}','preguntasDP@corregirPregunta');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/retos','retosDP@retoAleatorio');

Route::get('/pasos/{slug}/{num}','pasosDP@ordenPasos');//tiene que ser el slug

Route::get('buscar/{slugRecet}','ingredientesDP@show');

Route::get('receta/{slug}','recetasDP@show');

Route::get('receta/info/{slug}','recetasDP@showinfo');

Route::post('/retos','retosDP@store');

Route::post('/receta/','recetasDP@store');