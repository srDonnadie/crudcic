<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mantenimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->integer('id')->unique();

            $table->string('fecha_mantenimiento')->length(11);
            $table->string('estado_mantenimiento')->length(11);
            $table->string('tipo_mantenimiento')->length(15);
            $table->string('realizado_por')->length(60);
            $table->string('observaciones_mantenimiento')->length(200);
            $table->string('serial_id');

            $table->foreign('serial_id')
                    ->references('serial')
                    ->on('equipos');

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
}
