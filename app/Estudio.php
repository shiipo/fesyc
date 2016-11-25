<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    protected $table = "estudios";

    protected $fillable = ['nivel_academico', 'grado_academico', 'profesion', 'año', 'pais_id', 'user_id'];

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}