<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentUser extends Model
{
    protected $table = 'document_user';

    public function receipients()
    {
        return $this->belongsToMany('App\User');
    }

    public function document()
    {
        return $this->belongsTo('App\Document');
    }
}
