<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampoActuacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campo_actuacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rama_investigacion');
            $table->string('descripcion');
            $table->integer('user_id')->unsigned();
            // Relacion con "usuarios"
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
        Schema::drop('campo_actuacion');
    }
}
