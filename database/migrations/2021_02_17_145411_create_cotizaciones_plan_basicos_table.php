<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionesPlanBasicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones_plan_basicos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('plane_id')->unsigned();
            $table->foreign('plane_id')->references('id')->on('planes')->onDelete('cascade');
            $table->integer('nombre');
            $table->integer('rnc');
            $table->string('iten');
            $table->integer('cantidad_iten');
            $table->integer('precio');
            $table->integer('impuesto');
            $table->integer('descuento');
            $table->integer('precio_total');
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
        Schema::dropIfExists('cotizaciones_plan_basicos');
    }
}
