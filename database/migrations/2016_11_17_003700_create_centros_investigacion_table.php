<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentrosInvestigacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros_investigacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('parroquia_id')->unsigned();
            // Relacion con "parroquias"
            $table->foreign('parroquia_id')->references('id')->on('parroquias');
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
        Schema::drop('centros_investigacion');
    }
}
