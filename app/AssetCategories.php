<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetCategories extends Model
{
    protected $fillable=['asset_category'];

    public function asset()
    {
        return $this->hasMany('App\Asset');
    }
}
