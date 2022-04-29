<?php

namespace App\Http\Requests\Patient;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
            'name'  => 'required|min:3',
            'age'  => 'required|numeric',
            'address'  => 'required|min:3',
            'phone'  => 'required|min:11',
            'father_name'  => 'required|min:3',
            'father_age'  => 'required|numeric',
            'father_job'  => 'required|min:3',
            'mother_name'  => 'required|min:3',
            'mother_age'  => 'required|numeric',
            'mother_job'  => 'required|min:3',
            'relation_type'  => 'required',
            'number_of_births'  => 'required|numeric',
        ];
    }
}
