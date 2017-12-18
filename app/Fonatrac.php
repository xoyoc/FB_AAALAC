<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fonatrac extends Model
{
    //
    protected $fillable = [
        'fecha', 'nombre_buque', 'bandera', 'viaje',
        'terminal', 'movimeinto', 'hora'
    ];

}
