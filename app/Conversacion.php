<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversacion extends Model
{
	/*
    public function trabajo()
    {
      return $this->belongsTo('App\Conversacion');
    }
    */

    public function contrato(){
    	return $this->belongsTo('App\Contrato');
    }

    public function de(){
    	return $this->hasOne('App\User');
    }

    public function para(){
    	return $this->hasOne('App\User');
    }


  
}


