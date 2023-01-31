<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Asset extends Model implements HasMedia
{
    use HasMediaTrait;
    
    protected $fillable = ['asset_name','model_name','serial_number','asset_description',
    'date_acquired','warranty_date','location_of_asset',
    'qr_code','cost_of_asset','latitude','longitude'];

    public function assetCategories()
    {
        return $this->belongsTo('App\AssetCategories','asset_category_id');
    }

    public function department()
    {
        return $this->belongsTo('App\Department','department_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Status','status_id');
    }

    public function getAssetsImage()
    {
        return $this->getMedia('assets_images')->last() === null ? "" : $this->getMedia('assets_images')->last()->getFullUrl();
    }

    public function getAssetsQrCode()
    {
        return $this->getMedia('qr_codes')->last() === null ? "" : $this->getMedia('qr_codes')->last()->getFullUrl();
    }

    public function registerMediaCollections()
    {
        $this->addMediaCollection('assets_images')->useDisk('uploads');
        $this->addMediaCollection('qr_codes')->useDisk('qr-code');
    }
}
