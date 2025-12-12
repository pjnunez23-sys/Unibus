<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camiones extends Model
{
    use HasFactory;
    
    protected $table = 'camiones';

        protected $fillable = [
        'numero_economico',
        'placas',
        'capacidad',
        'ruta_id'
    ];

}
