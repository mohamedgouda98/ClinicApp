<?php

namespace App\Http\Requests\Diagnosis;

use Illuminate\Foundation\Http\FormRequest;

class DiagnosisRequest extends FormRequest
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
    public function rules(): array
    {
        return [
           'patient_id'      => 'required|exists:patients,id',
           'diagnosis_img[]' => 'sometimes|file|mimes:png,jpg,gif,webp,jpeg,zip,rar,pdf,docx,xlsx'
        ];
    }
}
