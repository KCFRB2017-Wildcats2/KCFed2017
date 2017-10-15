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
        'name', 'address_line_1', 'address_line_2', 'website_url', 'description', 'logo', 'city_id', 'zip', 'domain'
    ];

    public function city() {
        return $this->belongsTo('App\City');
    }

    public function users(){
        return $this->hasMany('App\User', 'company_users');
    }

    public function admins(){
        return $this->hasMany('App\User', 'company_admins');
    }
}
