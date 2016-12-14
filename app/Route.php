<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = 'route';

    protected $fillable = [
        'travel_id','transit_time','latitude','longitude',
    ];

    public function Travel()
    {
        return $this->belongsToOne('App\Travel','travel_id');
    }

    public $timestamps = false;
}
