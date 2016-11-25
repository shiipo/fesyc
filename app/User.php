<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'apellidos', 'email', 'cedula', 'password', 'tipo', 'genero', 'f_nacimiento', 'color', 'foto'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function noticias()
    {
        return $this->hasMany('App\Noticia');
    }

    public function repositorio()
    {
        return $this->belongsTo('App\Repositorio');
    }

    public function campoActuacion()
    {
        return $this->hasMany('App\CampoActuacion');
    }

    public function estudios()
    {
        return $this->hasMany('App\Estudio');
    }

    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }

    public function idiomas()
    {
        return $this->hasMany('App\Idioma');
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

    public function actividades()
    {
        return $this->hasMany('App\Actividades');
    }

    public function participacionEventos()
    {
        return $this->hasMany('App\ParticipacionEvento');
    }

    public function admin()
    {
        return $this->tipo === 'admin';
    }
}