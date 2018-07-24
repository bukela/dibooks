<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkbookItemEditRequest extends FormRequest
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
            'datum_prijema' => 'date_format:"d-m-Y"',
            'datum' => 'date_format:"d-m-Y"',
        ];
    }

    public function messages() {
        return [
            'datum_prijema.date_format' => 'Uneti datum u formatu d-m-Y',
            'datum.date_format' => 'Uneti datum u formatu d-m-Y',
        ];
    }
}
