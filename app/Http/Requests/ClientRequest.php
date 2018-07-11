<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'naziv' => 'required',
            'adresa' => 'required',
            'mesto' => 'required',
            'pib' => 'required',
            'jmbg' => 'required|size:13',
            'tekuci_racun' => 'required',
            'telefon' => 'required',
            'email' => 'required|email',
            // 'osoba_za_kontakt' => 'required',
            // 'napomena' => 'required'
        ];
    }

    public function messages() {
        return [
            'naziv.required' => 'Naziv je obavezan',
            'adresa.required' => 'Adresa je obavezna',
            'mesto.required' => 'Mesto je obavezno',
            'pib.required' => 'PIB je obavezan',
            'jmbg.required' => 'JMBG je obavezan',
            'jmbg.size' => 'JMBG neispravan format',
            'tekuci_racun.required' => 'Broj tekuceg racuna je obavezan',
            'telefon.required' => 'Broj telefona racuna je obavezan',
            'email.required' => 'Email je obavezan',
            'email.email' => 'Email neispavan format',
            // 'osoba_za_kontakt' => '',
            // 'napomena' => 'required'

        ];
    }
}
