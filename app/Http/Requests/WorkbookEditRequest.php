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
            'datum_prijema_1' => 'date_format:"d-m-Y"',
            'datum_1' => 'date_format:"d-m-Y"',

            'datum_prijema_2' => 'date_format:"d-m-Y"',
            'datum_2' => 'date_format:"d-m-Y"',

            'datum_prijema_3' => 'date_format:"d-m-Y"',
            'datum_3' => 'date_format:"d-m-Y"',
            // 'broj_1' => 'required',
            // 'broj_2' => 'required',
            // 'broj_3' => 'required'
            // 'valuta' => 'required',
            // 'napomena' => 'required',
            // 'placen_iznos' => 'required|numeric'
        ];
    }

    public function messages() {
        return [
            'datum_prijema_1.date_format' => 'Uneti datum u formatu d-m-Y',
            'datum_1.date_format' => 'Uneti datum u formatu d-m-Y',

            'datum_prijema_2.date_format' => 'Uneti datum u formatu d-m-Y',
            'datum_2.date_format' => 'Uneti datum u formatu d-m-Y',

            'datum_prijema_3.date_format' => 'Uneti datum u formatu d-m-Y',
            'datum_3.date_format' => 'Uneti datum u fo_2rmatu d-m-Y',

            // 'broj_1.required' => 'Broj je obavezno polje',
            // 'broj_2.required' => 'Broj je obavezno polje',
            // 'broj_3.required' => 'Broj je obavezno polje'
        ];
    }
}
