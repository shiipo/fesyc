<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepositorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositorio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('archivo');
            $table->integer('categoria_id')->unsigned();
            $table->integer('user_id')->unsigned();
            // Relaciones con "categorias" y "usuarios"
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::drop('repositorio');
    }
}
