<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = "paises";

    protected $fillable = ['nombre'];

    public function estados()
    {
        return $this->hasMany('App\Estado');
    }

    public function estudios()
    {
        return $this->hasMany('App\Estudio');
    }

    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }

    public function reconocimientos()
    {
        return $this->hasMany('App\Reconocimiento');
    }

    public function experienciasLaborales()
    {
        return $this->hasMany('App\ExperienciaLaboral');
    }

    public function formacionTalentos()
    {
        return $this->hasMany('App\FormacionTalento');
    }

    public function participacionEventos()
    {
        return $this->hasMany('App\ParticipacionEvento');
    }

}
