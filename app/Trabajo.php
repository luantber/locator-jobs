<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
  
  protected $guarded = [];
    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }

    public function calificacions()
    {
      return $this->hasMany('App\Calificacion');
    }

    public function trabajador()
    {
      return $this->belongsTo('App\Trabajador');
    }

    public function fotos()
    {
      return $this->hasMany("App\Foto");
    }

    protected $geofields = array('location');
    public function setLocationAttribute($value) {
        $this->attributes['location'] = DB::raw("POINT($value)");
    }
    public function getLocationAttribute($value){
        $loc =  substr($value, 6);
        $loc = preg_replace('/[ ,]+/', ',', $loc, 1);
        return substr($loc,0,-1);
    }
    public function newQuery($excludeDeleted = true)
    {
        $raw='';
        foreach($this->geofields as $column){
            $raw .= ' astext('.$column.') as '.$column.' ';
        }
        return parent::newQuery($excludeDeleted)->addSelect('*',DB::raw($raw));
    }
    public function scopeDistance($query,$dist,$location)
    {
        return $query->whereRaw('st_distance(location,POINT('.$location.')) < '.$dist);
    }

}
