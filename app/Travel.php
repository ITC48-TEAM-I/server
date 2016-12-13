<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $table = 'travel';

    protected $fillable = [
        'travel_code','travel_date','latitude','longitude','area_name','country_name','user_id'
    ];

    public function spots()
    {
        return $this->belongsToMany('App\Spot','travel_id');
    }

    public function scopeFindCode($query,$code)
    {
    	return $query->where('travel_code',$code);
    }

    public $timestamps = false;
}
