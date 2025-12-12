<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paradas extends Model
{
      use HasFactory;

    protected $table = 'paradas';

    protected $fillable = [
        'nombre',
        'descripcion',
        'direccion',
        'latitud',
        'longitud'
    ];
}
