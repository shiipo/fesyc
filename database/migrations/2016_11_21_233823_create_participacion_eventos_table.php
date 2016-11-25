<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipacionEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participacion_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('tipo');
            $table->string('participacion');
            $table->string('ambito');
            $table->date('año');
            $table->integer('pais_id')->unsigned();
            $table->integer('user_id')->unsigned();
            // Relacion con "users" y "paises"
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('participacion_eventos');
    }
}
