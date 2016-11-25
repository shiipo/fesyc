<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReconocimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reconocimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('tipo');
            $table->string('motivo');
            $table->string('ambito');
            $table->date('año');
            $table->integer('pais_id')->unsigned();
            $table->integer('user_id')->unsigned();
            // Relacion con "paises" y "users"
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
        Schema::drop('reconocimientos');
    }
}
