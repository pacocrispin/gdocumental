<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id();
           // $table->string('codigo');
           // $table->string('cedula');
           // $table->string('nombre');
            //$table->string('direccion');
            //$table->integer('telefono');
            //$table->integer('celular');
            //$table->string('foto');
            //$table->foreign('departamento_id')->references('id')->on('departamentos');
            //$table->foreign('cargo_id')->references('id')->on('cargos');
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
        Schema::dropIfExists('trabajadores');
    }
}
