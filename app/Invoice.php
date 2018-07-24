<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    protected $guarded = [];

    public function client() {
        
        return $this->belongsTo(Client::class);
    }

    public function invoice_item() {

        return $this->hasMany(InvoiceItem::class);

    }
}
