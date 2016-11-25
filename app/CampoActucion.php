<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampoActucion extends Model
{
    protected $table = "campo_actuacion";

    protected $fillable = ['rama_investigacion', 'descripcion', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
