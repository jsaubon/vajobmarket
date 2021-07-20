<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBillingDetails extends Model
{
    protected $guarded = [];
    
    public function client() {
        return $this->belongsTo('App\Client','client_id');
    }
}
