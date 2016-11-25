<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repositorio extends Model
{
    protected $table = "repositorio";

    protected $fillable = ['archivo', 'categoria_id', 'usuario_id'];

        public function categorias()
        {
            return $this->hasMany('App\Categoria');
        }

        public function users()
        {
            return $this->hasMany('App\User');
        }

}
