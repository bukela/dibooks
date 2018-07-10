<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'naziv', 'email', 'mesto', 'pib', 'jmbg', 'telefon', 'tekuci_racun', 'osoba_za_kontakt', 'adresa'
    ];

    // protected $guarded = [];

    public function invoice() {

        return $this->hasMany(IncomingInvoice::class);
    }

    public function incoming_invoice() {

        return $this->hasMany(IncomingInvoice::class);
    }
}
