<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|min:4',
            'last_name' => 'required',
            'email' => 'required|email|unique:employees',
        ];
    }
    public function messages()
    {
        return [
            'email.unique' => 'Ton email existe tapette',
            'first_name.required' => 'Ton prenom est obligatoire',
        ];
    }
}
