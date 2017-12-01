<?php

namespace App;

use App\Agencia;
use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //
    protected $fillable = [
        'patente', 'nombreaa', 'email', 'fecha_inscripcion',
        'curp', 'carta_aaalac', 'carta_referencia','copia_acta',
        'copia_publicacion', 'copia_no_ade', 'copia_poder', 'pago',
        'estatus'
    ];

    public function agencias()
    {
        return $this->hasOne(Agencia::class);
    }
}
