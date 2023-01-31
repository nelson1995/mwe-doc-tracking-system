<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function personnel()
    {
    	return $this->belongsTo('App\User', 'person_id');
    }

    public function branch()
    {
    	return $this->belongsTo('App\Branch', 'branch_id');
    }

    public function sub_department()
    {
    	return $this->belongsTo('App\SubDepartment');
    }

    public function tracks()
    {
        return $this->belongsToMany('App\Track');
    }
}
