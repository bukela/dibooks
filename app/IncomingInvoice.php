<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomingInvoice extends Model
{
    protected $guarded = [];

    public function client() {
        
        return $this->belongsTo(Client::class);
        
    }
}
