<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRegisterRequest extends FormRequest
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
          'names'=>'required',
          'company'=>'required',
          'email'=>'required|email',
          'phone'=>'required',
          'phone-code'=>'required',
          'country'=>'required',
          'country-flag'=>'required',
          'summary'=>'required',
          'option'=>'required'

      ];
    }
}