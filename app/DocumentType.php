<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    //

    protected $fillable=['type'];

    public function documents()
    {
        return $this->hasMany('App\Document');
    }
}
