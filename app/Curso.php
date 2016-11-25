<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "cursos";

    protected $fillable = ['nombre', 'tipo', 'institucion', 'año', 'duracion', 'pais_id', 'user_id'];

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
