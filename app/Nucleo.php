<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nucleo extends Model
{
    protected $table = "nucleos";

    protected $fillable = ['nombre', 'centro_id'];

        public function centroInvestigacion()
        {
            return $this->belongsTo('App\CentroInvesticacion');
        }
}
