<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeoModel extends Model
{
    /**
    * Boot method
    * @return void
    */
    public static function boot(){
        parent::boot();
        static::creating(function($eloquentModel){

            if(isset($eloquentModel->latitude, $eloquentModel->longitude)){
                $point = $eloquentModel->geoToPoint($eloquentModel->latitude, $eloquentModel->longitude);
                $eloquentModel->setAttribute('location',  DB::raw("GeomFromText('POINT(" . $point . ")')") );
            }

        });

        static::updated(function($eloquentModel){

            if(isset($eloquentModel->latitude, $eloquentModel->longitude)){
                $point = $eloquentModel->geoToPoint($eloquentModel->latitude, $eloquentModel->longitude);
                DB::statement("UPDATE " . $eloquentModel->getTable() . " SET location = GeomFromText('POINT(" . $point . ")') WHERE id = ". $eloquentModel->id);
            }

        });
    }
}
