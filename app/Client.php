<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'naziv', 'email', 'mesto', 'pib', 'jmbg', 'telefon', 'tekuci_racun', 'osoba_za_kontakt', 'adresa', 'napomena'
    ];

    // protected $guarded = [];

    public function invoice() {

        return $this->hasMany(Invoice::class);
    }

    public function incoming_invoice() {

        return $this->hasMany(IncomingInvoice::class);
    }

    // public function scopeSearch($query, $search) {
    //     return $query->where('naziv', 'LIKE', "%$search%");
    // }
}
