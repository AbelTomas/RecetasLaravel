<?php

namespace App\Http\Controllers;

use App\Receta;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class RecetasController extends Controller
{
    public function index() { // index sirve para coger un listado de las recetas
        $recetas = Receta::all();
        return View::make('recetas.index')->with('recetas',$recetas); // vamos a la vista con recetas.index y le pasamos el recetas de arriba
    }
    public function show($id) {
        $receta = Receta::find($id);
        return View::make('recetas.show')->with('receta', $receta);
    }
    public function create() {// para crear la receta
       $receta = new Receta();
       return View::make('recetas.save')->with('receta',$receta);

    }

    public function store() { // para guardar la receta
        $receta = new Receta();
        $receta->nombre = Input::get('nombre');
        $receta->numcomensales = Input::get('numcomensales');
        $receta->ingrediente1 = Input::get('ingrediente3');
        $receta->cantidad1 = Input::get('cantidad3');
        $receta->ingrediente2 = Input::get('ingrediente2');
        $receta->cantidad2 = Input::get('cantidad2');
        $receta->ingrediente3 = Input::get('ingrediente3');
        $receta->cantidad3 = Input::get('cantidad3');
        $receta->categoria = Input::get('categoria');
        $receta->valoracion = Input::get('valoracion');

        $receta->save();
        return Redirect::to('receta')->with('notice', 'La receta ha sido creado correctamente.');
    }
public function edit($id) {
            $receta = Receta::find($id);
            return View::make('recetas.save')->with('receta', $receta);

    }
    public function update($id)
    {
        $receta = Receta::find($id);
        $receta->nombre = Input::get('nombre');
        $receta->numcomensales = Input::get('numcomensales');
        $receta->ingrediente1 = Input::get('ingrediente3');
        $receta->cantidad1 = Input::get('cantidad3');
        $receta->ingrediente2 = Input::get('ingrediente2');
        $receta->cantidad2 = Input::get('cantidad2');
        $receta->ingrediente3 = Input::get('ingrediente3');
        $receta->cantidad3 = Input::get('cantidad3');
        $receta->categoria = Input::get('categoria');
        $receta->valoracion = Input::get('valoracion');
        $receta->save();
        return Redirect::to('receta')->with('notice', 'La receta ha sido modificada correctamente.');
    }
    public function destroy($id) { // para eliminar usuario
        $receta = Receta::find($id);
        $receta->delete();
        return Redirect::to('receta')->with('notice', 'La receta ha sido eliminada correctamente.');

    }
}
