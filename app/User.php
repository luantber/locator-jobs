<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function trabajador()
    {
      return $this->hasOne('App\Trabajador');
    }

    public function calificacions()
    {
      return $this->hasMany('App\Calificacion');
    }
    public function contratos()
    {
      return $this->hasMany('App\Contrato');
    }

    

}
