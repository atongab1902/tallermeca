<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('asistencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Cedula');
            $table->string('Nombre');
            $table->string('fecha');
            $table->string('asistenciaentrada');
            $table->string('asistenciasalida');
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
        //
    }
};
