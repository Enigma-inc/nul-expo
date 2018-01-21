<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConferenceEventRequest extends FormRequest
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
            'sessionTitle'=>'required',
            'chair'=>'required',
            'chairCountry'=>'required',
            'chairCountryFlag'=>'required',

            'presentationTitle'=>'required',
            'time'=>'required',
            'room'=>'required',
            'presenter'=>'required',
            'presenterCountry'=>'required',
            'presenterCountryFlag'=>'required',

        ];
    }
}
