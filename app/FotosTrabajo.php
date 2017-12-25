<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotosTrabajo extends Model
{
	protected $fillable = ['url','miniatura'];

    public function trabajo()
    {
        return $this->belongsTo("App\Trabajo");
    }
}
