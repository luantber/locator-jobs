<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
	protected $fillable = ['url','miniatura'];

    public function trabajo()
    {
        return $this->belongsTo("App\Trabajo");
    }
}
