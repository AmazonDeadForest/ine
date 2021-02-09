<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $table = 'actividades';

    protected $fillable = [
        'id',
        'nombre',
        'objetivo',
        'periodicidad',
        'producto',
        'hora',
        'volumen',
        'personas',
        'total',
        'cargo',
        'fechaInicio',
        'fechaTermino',
        'unidad'
    ];
}
