<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('recetas', 'recetasDP@index');

Route::get('pasos/{slug}','pasosDP@devolverPasos');//tiene que ser el slug

Route::get('cronometro','recetasDP@countDown');

Route::get('pregunta','preguntasDP@sleccionarPreguntaAleatoria');

Route::get('pregunta/corregir/{id}/{respuesta}','preguntasDP@corregirPregunta');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/retos','retosDP@retoAleatorio');

Route::get('/pasos/{slug}/{num}','pasosDP@ordenPasos');//tiene que ser el slug

Route::get('buscar/{slugRecet}','ingredientesDP@show');

Route::get('receta/{slug}','recetasDP@show');

Route::get('receta/info/{slug}','recetasDP@showinfo');






Route::get('mensajes',function ()
{
    return view('enviarmensaje');
});

Route::get('receta/info/{slug}','recetasDP@showinfo');


Route::get('ingredientes/editar/{id}','ingredientesDP@edit');

Route::post('ingredientes/editar/{id}','ingredientesDP@update');