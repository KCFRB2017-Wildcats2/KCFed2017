<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'city_id',
        'domain',
        'logo'
    ];

    public function city() {
        return $this->belongsTo('App\City');
    }

    public function users(){
        return $this->hasMany('App\User');
    }
}
