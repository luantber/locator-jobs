<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    public function trabajo()
    {
        return $this->belongsTo("App\Trabajo");
    }
}
