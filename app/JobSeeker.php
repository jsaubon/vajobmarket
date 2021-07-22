<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    protected $guarded = [];

     public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }

    public function user() {
        return $this->belongsTo('App\User','user_id');
    }

    public function client_employees() {
        return $this->hasMany('App\ClientEmployee','jobseeker_id');
    }


    public function jobseeker_educations() {
        return $this->hasMany('App\JobSeekerEducation','jobseeker_id');
    }

    public function jobseeker_experiences() {
        return $this->hasMany('App\JobSeekerExperience','jobseeker_id');
    }

    public function jobseeker_languages() {
        return $this->hasMany('App\JobSeekerLanguage','jobseeker_id');
    }

    public function jobseeker_profession() {
        return $this->hasOne('App\JobSeekerProfession','jobseeker_id');
    }

    public function jobseeker_references() {
        return $this->hasMany('App\JobSeekerReference','jobseeker_id');
    }

    public function jobseeker_specialized_skills() {
        return $this->hasMany('App\JobSeekerSpecializedSkill','jobseeker_id');
    }
}
