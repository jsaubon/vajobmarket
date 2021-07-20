<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User','user_id');
    }


    public function client_billing_detail() {
        return $this->hasOne('App\ClientBillingDetail','client_id');
    }

    public function client_business_info() {
        return $this->hasOne('App\ClientBusinessInfo','client_id');
    }

    public function client_employees() {
        return $this->hasMany('App\ClientEmployee','client_id');
    }

    public function client_job_posts() {
        return $this->hasMany('App\ClientJobPost','client_id');
    }


    
}
