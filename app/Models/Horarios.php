<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horarios extends Model
{
    use HasFactory;

    protected $table = 'horarios';

    protected $fillable = [
        'camion_id',
        'hora_salida',
        'hora_llegada',
        'dias'
    ];

    public function camion()
    {
        return $this->belongsTo(Camiones::class, 'camion_id');
    }
}
