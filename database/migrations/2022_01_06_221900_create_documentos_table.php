<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('estado')->nullable();
            $table->timestamps();
            $table->boolean('eliminado')->default(0);
            $table->integer('numero');
            $table->string('uuid')->nullable();
            /*FK*/
            $table->unsignedBigInteger('creado_por_id');
            $table->foreign('creado_por_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('carpeta_id');
            $table->foreign('carpeta_id')->references('id')->on('carpetas')->onDelete('cascade');
                   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
    }
}
