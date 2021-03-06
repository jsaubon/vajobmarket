<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','middlename','lastname', 'email', 'password','mobile_no','phone_no','type'
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

    public function client() {
        return $this->hasOne('App\Client','user_id');
    }

    public function jobseeker() {
        return $this->hasOne('App\JobSeeker','user_id');
    }

    public function comments() {
        return $this->morphMany('App\Comment','commentable');
    }

    public function created_comments() {
        return $this->hasMany('App\Comment','created_by');
    }

    public function messages() {
        return $this->morphMany('App\Message','messageable');
    }

    public function created_messages() {
        return $this->hasMany('App\Message','created_by');
    }

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }

}
