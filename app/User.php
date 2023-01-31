<?php

namespace App;

use Spatie\MediaLibrary\File;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname', 'email', 'password','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function document()
    {
        return $this->hasMany('App\Document');
    }

    public function office()
    {  
        return $this->hasMany('App\Office');
    }

    public function fullname()
    {
        return $this->lname . " " . $this->fname . " " . $this->mname;
    }

    public function tracks()
    {
        return $this->hasMany('App\Track');
    }

    public function document_users()
    {
        return $this->hasMany('App\DocumentUser');
    }

    public function asset()
    {
        return $this->hasMany('App\Asset');
    }
}
