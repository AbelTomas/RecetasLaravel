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

Route::resource('/receta','RecetasController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('formulario', 'StorageController@index');

Route::get('storage/{archivo}', function ($archivo) { //Para ver la imagen añadida en http://localhost/RecetasLaravelGrupo/public/storage/nombre_de_archivo

    $public_path = public_path();
    $url = $public_path.'/storage/'.$archivo;
    //verificamos si el archivo existe y lo retornamos
    if (Storage::exists($archivo))
    {
        return response()->download($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);

});

