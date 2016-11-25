<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    protected $table = "parroquias";

    protected $fillable = ['nombre', 'municipio_id'];

        public function municipio()
        {
            return $this->belongsTo('App\Municipio');
        }
}
