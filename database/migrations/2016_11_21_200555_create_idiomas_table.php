<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdiomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idiomas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idioma');
            $table->string('nivel_escritura');
            $table->string('nivel_habla');
            $table->string('nivel_lectura');
            $table->integer('user_id')->unsigned();
            // Relacion con "users"
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
        Schema::drop('idiomas');
    }
}
