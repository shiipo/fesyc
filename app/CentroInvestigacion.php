<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroInvestigacion extends Model
{
    protected $table = "centros_investigacion";

    protected $fillable = ['nombre', 'parroquia_id'];

        public function nucleos()
        {
            $this->hasMany('App\Nucleo');
        }
}
