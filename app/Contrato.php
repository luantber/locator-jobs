<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    public function trabajo()
    {
      return $this->belongsTo('App\Trabajo');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }
    public function conversaciones(){
    	return $this->hasMany('App\Conversacion');
    }

    public function trabajador(){
    	return $this->belongsTo('App\Trabajador');
    }

    
}
