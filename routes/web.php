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


//Pruebas

/*use App\Image;

Route::get('/', function () {

    $images = Image::all();

    foreach ($images as $image) {
        echo '<p><strong>Usuario</strong>: '.ucfirst($image->user->name).'</p>';
        echo '<p><strong>Descripción Imágen</strong>: '.$image->description.'</p>';

        if(count($image->comments) >=1){
            foreach ($image->comments as $comment){
                echo '<p><strong>Comentario</strong>: '.$comment->content.'</p>';
                echo '<p><strong>Usuario que escribe el comentario</strong>: '.$comment->user->name.'</p>';
            }
        }

        if(count($image->likes) >= 1 ){
            echo '<strong>Likes:</strong> '.count($image->likes);
        }

        echo '<hr>';
    }

   // return view('welcome');
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

*/


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
