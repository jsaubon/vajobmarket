<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientJobPost extends Model
{
    protected $guarded = [];

     public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }


    
    public function client() {
        return $this->belongsTo('App\Client','client_id');
    }

    public function client_job_post_required_skills() {
        return $this->hasMany('App\ClientJobPostRequiredSkill','client_job_post_id');
    }
    public function applicants() {
        return $this->hasMany('App\ClientEmployee','client_job_post_id');
    }
}
