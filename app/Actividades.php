<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    protected $table = "actividades";

    protected $fillable = ['nombre', 'beneficiario', 'ambito', 'inicio', 'final', 'objetivo', 'resultado', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
