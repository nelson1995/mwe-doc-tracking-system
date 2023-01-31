<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function office()
    {
        $this->hasMany('App\Office');
    }
}
