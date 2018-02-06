<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class controlUsers extends Controller
{
    public function entar($id) { // index sirve para coger un listado de las recetas
        $user = User::all();
        $user->id=DB::select('SELECT id FROM users WHERE id= ?',$id);
        if($user->id){
            return View::make('recetas.index');
        }else{
            return 'pagina privada';
        }


    }
    public function index() { // index sirve para coger un listado de las recetas
        $user = new User();
        return View::make('inicio')->with('user',$user); // vamos a la vista con recetas.index y le pasamos el recetas de arriba
    }
}
