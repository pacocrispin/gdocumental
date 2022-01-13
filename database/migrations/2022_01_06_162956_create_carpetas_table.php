<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarpetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carpetas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();
            $table->boolean('eliminado')->default(0);
            /*FK*/
            $table->unsignedBigInteger('creado_por_id');
            $table->foreign('creado_por_id')->references('id')->on('users');
                   
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carpetas');
    }
}
