<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNucleosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nucleos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('centro_id')->unsigned();
            // Relacion con "centros_investigacion"
            $table->foreign('centro_id')->references('id')->on('centros_investigacion');
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
        Schema::drop('nucleos');
    }
}
