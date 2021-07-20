<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientEmployee extends Model
{
    protected $guarded = [];

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }


    
    public function client() {
        return $this->belongsTo('App\Client','client_id');
    }

    public function jobseeker() {
        return $this->belongsTo('App\JobSeeker','jobseeker_id');
    }
}
