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
        'name', 'address_line_1', 'address_line_2', 'address_line_3', 
        'website_url', 'description', 'city_id'
    ];


    public function city() {
        return $this->belongsToMany('App\City');
    }

}
