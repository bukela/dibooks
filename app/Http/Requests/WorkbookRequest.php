<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkbookRequest extends FormRequest
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
            'osnovni_broj' => 'required',
            'predmet' => 'required'
        ];
    }

    public function messages() {
        return [
            'osnovni_broj.required' => 'Broj delovodnika je obavezan',
            'predmet.required' => 'Predmet je obavezan',
        ];
    }
}
