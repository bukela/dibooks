<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomingInvoice extends Model
{
    protected $guarded = [];

    public function client() {
        
        return $this->belongsTo(Client::class);
        
    }

    public function getDatumPrijemaAttribute($value) {

        return date("d-m-Y", strtotime($value));

    }

    public function getDatumFaktureAttribute($value) {

        return date("d-m-Y", strtotime($value));
        
    }

    public function getDatumPlacanjaAttribute($value) {

        return date("d-m-Y", strtotime($value));
        
    }
}
