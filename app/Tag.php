<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function trabajos()
    {
      return $this->belongsToMany('App\Trabajo');
    }
}
