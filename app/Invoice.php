<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function clients() {
        
        return $this->belongsTo(Client::class);
    }

    public function invoice_items() {

        return $this->hasMany(InvoiceItems::class);
    }
}
