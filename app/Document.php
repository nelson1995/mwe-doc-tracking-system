<?php

namespace App;

use setasign\Fpdi\FpdiTrait;
use Spatie\MediaLibrary\File;
use setasign\Fpdi\FpdfTplTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Document extends Model implements HasMedia
{
    use HasMediaTrait,FpdiTrait;
    use FpdfTplTrait;
    
    protected $fillable = ['name','author','comment','address','date_of_arrival','status','date_written'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function documentType()
    {
        return $this->belongsTo('App\DocumentType', 'document_type_id');
    }

    public function getFile()
    {
        return $this->getMedia('uploaded-documents')->last() === null ? Redirect::back()->withErrors("Document not found.") : 
        $this->getMedia('uploaded-documents')->last()->getFullUrl();
    }
    
    public function registerMediaCollections()
    {
        $this->addMediaCollection('uploaded-documents');   

        // $this->addMediaCollection('uploaded-documents')->acceptsFile(function (File $file){
        //     return $file->mimeType !== 'image/jpeg' || $file->mimeType !== 'image/png'
        //         || $file->mimeType !== 'image/svg';
        // });   
    }
}
