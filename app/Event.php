<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'start_date', 'end_date', 'private', 
        'description', 'created_by', 'company_id'
    ];

    public function CreatedBy() {
        return $this->belongsTo('App\User');
    }

    public function Company() {
        return $this->belongsTo('App\Company');
    }
}
