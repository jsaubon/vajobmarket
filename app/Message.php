<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }



    public function messageable() {
        return $this->morphTo();
    }

    public function created_by() {
        return $this->belongsTo('App\User','user_id');
    }
}
