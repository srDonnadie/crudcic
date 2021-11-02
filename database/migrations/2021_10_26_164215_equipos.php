<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Equipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->integer('id')->unique();

            $table->string('serial')->length(20)->primary();
            $table->string('marca')->length(15);
            $table->string('tipo_equipo')->length(30);
            $table->string('codigo_interno')->length(10);
            $table->string('referencia')->length(50);

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
