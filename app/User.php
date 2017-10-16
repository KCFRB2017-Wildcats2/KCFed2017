<?php

namespace App;

use App\Company;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'avatar',
        'email',
        'password',
        'company_id',
        'company_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function events(){
        return $this->hasMany('App\Event', 'created_by');
    }
}
