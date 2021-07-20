<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeekerReferences extends Model
{
    protected $guarded = [];

    public function jobseeker() {
        return $this->belongsTo('App\JobSeeker','jobseeker_id');
    }
}
