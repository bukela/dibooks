<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class InvoiceRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'client_id' => 'required',
            'broj_fakture' => 'required|unique:invoices,broj_fakture,'.$request->id,
            // 'opis' => 'required'
            // 'valuta' => 'required',
            // 'napomena' => 'required',
            // 'placen_iznos' => 'required|numeric'
        ];
    }

    public function messages() {
        return [
            'broj_fakture.required' => 'Broj fakture je obavezan',
            'broj_fakture.unique' => 'Broj fakture vec postoji u bazi',
            'client_id.required' => 'Klijent je obavezan',
        ];
    }
}
