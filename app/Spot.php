<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $table = 'spot';

    protected $fillable = [
        'spot_code','travel_id','visit_time','latitude','longitude','spot_name','site_url','stay_minute','category_code',
    ];

    public function spots()
    {
        return $this->belongsToOne('App\Travel','travel_id');
    }
}
