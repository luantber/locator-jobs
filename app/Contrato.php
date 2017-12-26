<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    public function trabajo()
    {
      return $this->belongsTo('App\Trabajo');
    }

    //public function 
}
