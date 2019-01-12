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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//PREGUNTAS
Route::get('pregunta','preguntasDP@sleccionarPreguntaAleatoria');

Route::get('pregunta/corregir/{id}/{respuesta}','preguntasDP@corregirPregunta');

Route::post('/preguntas','preguntasDP@store');

Route::get('/preguntas','preguntasDP@index');

Route::DELETE('/preguntas/{id}','preguntasDP@destroy');

Route::get('preguntas/editar/{id}','preguntasDP@edit');

Route::post('preguntas/editar/{id}','preguntasDP@update');

//RETOS

Route::get('/retos','retosDP@retoAleatorio');

Route::post('/retos','retosDP@store');

Route::DELETE('/retos/{id}','retosDP@destroy');

Route::get('/retos','retosDP@index');

Route::get('retos/editar/{id}','retosDP@edit');

Route::post('retos/editar/{id}','retosDP@update');

//PASOS

Route::get('/obtenerPasos/{slug}','pasosDP@devolverPasos');

Route::get('/pasos/{slug}/{num}','pasosDP@ordenPasos');//tiene que ser el slug

Route::post('/pasos','pasosDP@store');

Route::DELETE('/pasos/{id}','pasosDP@destroy');

Route::get('/pasos','pasosDP@index');

Route::get('pasos/editar','pasosDP@edit');

Route::post('pasos/editar/{id}','pasosDP@update');

//RECETAS

Route::get('receta/{slug}','recetasDP@show');

Route::get('receta/info/{slug}','recetasDP@showinfo');

Route::post('/receta','recetasDP@store');

Route::get('/receta','recetasDP@index');

Route::get('numeroPasos/{slug}','recetasDP@obtenerNumeroPasos');

Route::DELETE('/receta/{id}','recetasDP@destroy');

Route::get('receta/editar/{id}','recetasDP@edit');

Route::post('receta/editar/{id}','recetasDP@update');

//INGREDIENTES

Route::get('buscar/{slugRecet}','ingredientesDP@show');

Route::post('/ingredientes','ingredientesDP@store');

Route::DELETE('/ingredientes/{id}','ingredientesDP@destroy');

Route::get('/ingredientes','ingredientesDP@index');

Route::get('ingredientes/editar/{id}','ingredientesDP@edit');

Route::post('ingredientes/editar/{id}','ingredientesDP@update');


//MENSAJES

Route::post('enviar','notificacionesDP@enviarMSJ');

