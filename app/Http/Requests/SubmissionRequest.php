<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'city' => 'required',
            'fav_animals' => 'required',
            'message' => 'required' 
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vul je naam in',
            'email.required' => 'Vul je e-mailadres in',
            'email.email' => 'Vul een geldig e-mailadres in',

        ];
    }
}
