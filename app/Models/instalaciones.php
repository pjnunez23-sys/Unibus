<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class instalaciones extends Model
{

    protected $fillable = [
        'nombre',
        'direccion',
        'latitud',
        'longitud',
    ];
}
