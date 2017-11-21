<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }
    public function trabajos()
    {
      return $this->hasMany('App\Trabajo');
    }
}
