<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class WorkbookEditRequest extends FormRequest
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
            'datum_prijema' => 'date_format:"d-m-Y"',
            'datum' => 'date_format:"d-m-Y"'
            // 'opis' => 'required'
            // 'valuta' => 'required',
            // 'napomena' => 'required',
            // 'placen_iznos' => 'required|numeric'
        ];
    }

    public function messages() {
        return [
            'datum_prijema.date_format' => 'Uneti datum u formatu d-m-Y',
            'datum.date_format' => 'Uneti datum u formatu d-m-Y'
        ];
    }
}
