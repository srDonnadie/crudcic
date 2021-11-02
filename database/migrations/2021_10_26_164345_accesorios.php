<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Accesorios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesorios', function (Blueprint $table) {
          
            $table->engine="InnoDB";
            $table->integer('id')->unique();

            $table->string('accesorios_computo')->length(100);
            $table->string('cables_extras')->length(100);
            $table->string('extras')->length(100);
            $table->string('serial_id');
            
            $table->foreign('serial_id')
                    ->references('serial')
                    ->on('equipos')->onDelete("cascade");

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
