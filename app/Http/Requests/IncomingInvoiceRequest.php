<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncomingInvoiceRequest extends FormRequest
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
            'client_id' => 'required',
            'redni_broj' => 'required|unique:invoices,broj_fakture',
        ];
    }

    public function messages() {
        return [
            'redni_broj.required' => 'Broj fakture je obavezan',
            'redni_broj.unique' => 'Broj fakture vec postoji u bazi',
            'client_id.required' => 'Klijent je obavezan'
        ];
    }
}
