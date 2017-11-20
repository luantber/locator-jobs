<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function trabajo()
  {
    return $this->belongsTo('App\Trabajo');


    
  }
}
