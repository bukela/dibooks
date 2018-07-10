<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutgoingInvoices extends Model
{
    public function clients() {

        return $this->hasMany(Client::class);

    }
}
