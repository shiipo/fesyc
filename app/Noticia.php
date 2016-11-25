<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = "noticias";

    protected $fillable = ['titulo', 'contenido', 'imagen', 'usuario_id'];

        public function user()
        {
            return $this->belongsTo('App\User');
        }
}
