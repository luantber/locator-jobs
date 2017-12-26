<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    public function trabajo()
    {
      return $this->belongsTo('App\Trabajo');
    }

    public function conversaciones(){
    	return $this->hasMany('App\Conversacion');
    }

    public function trabajador(){
    	return $this->hasOne('App\Trabajor');
    }
}
