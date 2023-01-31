<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDepartment extends Model
{
    public function department()
    {
    	return $this->belongsTo('App\Department');
    }

    public function office()
    {
        $this->hasMany('App\Office');
    }
}
