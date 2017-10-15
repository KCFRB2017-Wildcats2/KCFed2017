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
        'first_name', 'last_name', 'avatar', 'email', 'password', 'company_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isCompanyAdmin(){
        $company = Company::find($this->company->id);
        $is_admin = $company->admins()->where('company_id', $company->id)->where('user_id', $this->id)->exists();
        return $is_admin;
    }

    public function company() {
        return $this->belongsTo('App\Company', 'company_users');
    }

    public function events(){
        return $this->hasMany('App\Event', 'created_by');
    }
}
