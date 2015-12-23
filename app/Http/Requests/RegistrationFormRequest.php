<?php

namespace p4\Http\Requests;

use p4\Http\Requests\Request;
use p4\Http\Requests\RegistrationFormRequest;

class RegistrationFormRequest extends Request
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
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required'
            
        ];
    }
}
