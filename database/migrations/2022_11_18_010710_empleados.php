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
        Schema::create('empleados', function (Blueprint $table) {
            $table->engine="InnoDb";
            $table->bigIncrements('id');
            $table->string('Cedula');
            $table->string('Nombre');
            $table->bigInteger('cargos_id')->unsigned();
            $table->foreign('cargos_id')->references('id')->on('cargos')->onDelete("cascade");
            $table->string('Horario');
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