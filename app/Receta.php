<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = [
        'nombre', 'numcomensales', 'ingredientes1','cantidad1','ingredientes2','cantidad2','ingredientes3','cantidad3','categoria','valoracion'
    ];
    protected $hidden = [
        'remember_token',
    ];
}
