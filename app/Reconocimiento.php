<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reconocimiento extends Model
{
    protected $table = "reconocimientos";

    protected $fillable = ['nombre', 'tipo', 'motivo', 'ambito', 'año', 'pais_id', 'user_id'];

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
