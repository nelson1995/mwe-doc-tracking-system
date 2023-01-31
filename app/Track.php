<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public function created_by()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function trackOffices()
    {
    	return $this->hasMany(TrackOffice::class);
    }

    public function offices()
    {
    	return $this->belongsToMany(Office::class);
    }
}
