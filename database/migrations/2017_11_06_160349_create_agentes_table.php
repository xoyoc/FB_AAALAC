<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patente')->unsigned();
            $table->string('nombreaa');
            $table->string('email')->unique();
            $table->date('fecha_inscripcion');
            $table->string('curp')->nullable();
            $table->enum('carta_aaalac',['No', 'Si']);
            $table->enum('carta_referencia',['No', 'Si']);
            $table->enum('copia_acta',['No', 'Si']);
            $table->enum('copia_publicacion',['No', 'Si']);
            $table->enum('copia_no_ade',['No', 'Si']);
            $table->enum('copia_poder',['No', 'Si']);
            $table->enum('pago',['No', 'Si']);
            $table->string('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agentes');
    }
}
