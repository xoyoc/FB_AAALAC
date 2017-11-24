<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfc');
            $table->integer('agente_id')->unsigned();
            $table->integer('patente_respaldo')->nullable();
            $table->string('nombre_agencia');
            $table->string('domicilio');
            $table->string('telefono');
            $table->string('web')->nullable();
            $table->string('logotipo')->default('Icono.jpg');
            $table->string('nombre_gerente');
            $table->string('gerente_movil')->nullable();
            $table->string('gerente_correo');
            $table->string('nombre_admon')->nullable();
            $table->string('admon_correo')->nullable();
            $table->string('nombre_trafico')->nullable();
            $table->string('trafico_correo')->nullable();
            $table->string('nombre_operaciones')->nullable();
            $table->string('operaciones_movil')->nullable();
            $table->string('operaciones_correo')->nullable();
            $table->timestamps();

            $table->foreign('agente_id')->references('id')->on('agentes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencias');
    }
}
