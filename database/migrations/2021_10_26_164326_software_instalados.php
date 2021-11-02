<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SoftwareInstalados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software_instalados', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->integer('id')->unique();

            $table->string('tipo_software')->length(50);
            $table->string('nombre_software')->length(50);
            $table->string('version_software')->length(50);
            $table->string('fecha_instalacion')->length(11);
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
