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

    public function client_job_post() {
        return $this->belongsTo('App\ClientJobPost','client_job_post_id');
    }


    public function employee_monitors() {
        return $this->hasMany('App\EmployeeMonitor','client_employee_id');
    }
}
