<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'user';

    protected $fillable = [
        'user_code', 'mail_address', 'password','token',
    ];

    public function travels()
    {
        return $this->hasMany('App\Travel','user_id');
    }

    public function scopeFindCode($query,$code)
    {
        return $query->where('user_code',$code);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*protected $hidden = [
        'password', 'remember_token',
    ];*/

    public $timestamps = false;
}
