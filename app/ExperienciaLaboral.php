<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienciaLaboral extends Model
{
    protected $table = "experiencia_laboral";

    protected $fillable = ['desempeño', 'tipo', 'cargo', 'institucion', 'año', 'pais_id', 'user_id'];

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
