<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nombre'];
    public function trabajos()
    {
      return $this->belongsToMany('App\Trabajo');
    }

    public function trabajadors()
    {
      return $this->belongsToMany('App\Trabajador');
    }
}
