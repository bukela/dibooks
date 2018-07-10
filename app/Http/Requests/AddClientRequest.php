<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AddClientRequest extends FormRequest
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
            'jmbg' => 'required|digits:13|numeric',
            'tekuci_racun' => 'required',
            'telefon' => 'required',
            'email' => 'required|email',
            'osoba_za_kontakt' => 'required',
            'napomena' => 'required'
        ];
    }

    // public function messages() {
    //     return [
    //         'naziv.required' => 'Naziv je obavezan',
    //         'adresa.required' => 'Adresa je obavezna',
    //         'mesto.required' => 'Mesto je obavezno',
    //         'schedules.required' => 'Schedule je obavezan',
    //         'short_description.required' => 'Tekst horoskopa je obavezan'
    //     ];
    // }
}
