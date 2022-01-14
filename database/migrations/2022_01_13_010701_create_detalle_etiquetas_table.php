<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleEtiquetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_etiquetas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //fk
            $table->unsignedBigInteger('etiqueta_id');
            $table->foreign('etiqueta_id')->references('id')->on('etiquetas')->onDelete('cascade');
            $table->unsignedBigInteger('documento_id');
            $table->foreign('documento_id')->references('id')->on('documentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_etiquetas');
    }
}
