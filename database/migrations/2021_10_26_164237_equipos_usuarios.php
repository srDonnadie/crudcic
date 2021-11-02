<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EquiposUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos_usuarios', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->integer('id')->unique();

            $table->string('fecha_entrega')->length(11);
            $table->string('estado_entrega')->length(10);
            $table->string('ubicacion')->length(50);
            $table->string('fecha_devolucion')->length(11);
            $table->string('observacion_devolucion')->length(200);
            $table->string('cc_id');
            $table->string('serial_id');

            $table->foreign('serial_id')
                    ->references('serial')
                        ->on('equipos');

            $table->foreign('cc_id')
                    ->references('cc')
                        ->on('usuarios');

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
