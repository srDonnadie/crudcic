<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->integer('id')->unique();

            $table->string('cc')->length(20)->primary();
            $table->string('primer_nombre')->length(20);
            $table->string('segundo_nombre')->length(20);
            $table->string('apellido_paterno')->length(20);
            $table->string('apellido_materno')->length(20);
            $table->string('correo')->length(50);
            $table->string('cargo')->length(50);
            
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
