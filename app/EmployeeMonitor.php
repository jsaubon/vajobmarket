<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeMonitor extends Model
{
    protected $guarded = [];

     public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }



    public function jobseeker() {
        return $this->belongsTo('App\Jobseeker','jobseeker_id');
    }
}
