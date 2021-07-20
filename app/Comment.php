<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function commentable() {
        return $this->morphTo();
    }

    public function created_by() {
        return $this->belongsTo('App\User','user_id');
    }
}
