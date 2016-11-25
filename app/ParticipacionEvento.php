<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipacionEvento extends Model
{
    protected $table = "participacion_eventos";

    protected $fillable = ['nombre', 'tipo', 'participacion', 'ambito', 'año', 'pais_id', 'user_id'];

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
