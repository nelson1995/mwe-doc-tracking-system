<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
   public function sub_departments()
    {
    	return $this->hasMany('App\Department');
    }

    public function asset()
    {
        return $this->hasMany('App\Asset');
    }
}
