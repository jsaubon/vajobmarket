<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentLike extends Model
{
    protected $guarded = [];

     public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }



    public function comment() {
        return $this->belongsTo('App\Comment','comment_id');
    }

    public function user() {
        return $this->belongsTo('App\User','user_id');
    }
}
