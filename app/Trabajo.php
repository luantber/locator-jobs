<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }

    public function calificacions()
    {
      return $this->hasMany('App\Calificacion');
    }

    public function trabajador()
    {
      return $this->belongsTo('App\Trabajador');
    }
}
