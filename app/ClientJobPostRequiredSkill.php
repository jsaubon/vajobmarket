<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientJobPostRequiredSkill extends Model
{
    protected $guarded = [];

    public function client_job_post() {
        return $this->belongsTo('App\ClientJobPost','client_job_post_id');
    }

}
