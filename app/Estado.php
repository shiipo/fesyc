<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = "estados";

    protected $fillable = ['nombre', 'pais_id'];

        public function municipios()
        {
            return $this->hasMany('App\Municipio');
        }

        public function pais()
        {
            return $this->belongsTo('App\Pais');
        }
}
