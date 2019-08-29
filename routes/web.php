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

Route::get('/', function () {
    return view('completo');
});


Route::get('/municipios/{id}', 'MunicipioController@getMunicipios');
Route::resource('despesa', 'DespesaController');
Route::resource('matricula', 'MatriculaController');

// só usada para obter os estados
Route::resource('estados', 'EstadoController');
Route::resource('estimativas', 'EstimativaController');

Route::get('/despesa/relatorio/{id}', 'DespesaController@getRelatorio');

Route::get('/matricula/indicadores/{id}', 'MatriculaController@getIndicadores');
Route::get('matricula/{id_estado}/estado', 'MatriculaController@getMatriculasEstado');