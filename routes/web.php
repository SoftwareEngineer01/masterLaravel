<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/formulario', 'CategoriaController@formulario');
Route::post('/recibir', 'CategoriaController@recibir');

Route::resource('/categoria', 'CategoriaController');

//Frutas
Route::group(['prefix' => 'frutas'], function () {
    Route::get('index', 'FrutaController@index');
    Route::get('detail/{id}', 'FrutaController@detail');
    Route::get('crear', 'FrutaController@create');
    Route::post('store', 'FrutaController@store');
    Route::get('destroy/{id}', 'FrutaController@destroy');
    Route::get('editar/{id}', 'FrutaController@edit');
    Route::post('actualizar', 'FrutaController@update');
});