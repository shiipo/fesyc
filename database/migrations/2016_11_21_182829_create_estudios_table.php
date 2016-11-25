<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nivel_academico');
            $table->string('grado_academico');
            $table->string('profesion')->nullable();
            $table->date('año')->nullable();
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
        Schema::drop('estudios');
    }
}
