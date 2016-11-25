<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormacionTalento extends Model
{
    protected $table = "formacion_talentos";

    protected $fillable = ['aporte', 'titulo', 'institucion', 'año', 'pais_id', 'user_id'];

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
