<?php

namespace App;

use App\Agente;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    //
    protected $fillable = ['rfc','agente_id','patente_respaldo','nombre_agencia','domicilio','telefono','web','logotipo','nombre_gerente','gerente_movil','gerente_correo','nombre_admon','admon_correo','nombre_trafico','trafico_correo','nombre_operaciones','operaciones_movil','operaciones_correo'];

    public function agente()
    {
    	return $this->belongsTo(agente::class);
    }
}
