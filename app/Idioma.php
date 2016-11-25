<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = "idiomas";

    protected $fillable = ['idioma', 'nivel_escritura', 'nivel_habla', 'nivel_lectura', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
