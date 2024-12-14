<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'last_name' => 'required|min:4',
            'first_name' => 'required',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => 'Le nom est obligatoire',
            'last_name.min' => 'Le nom doit avoir au moins 4 caractères',
            'first_name.required' => 'Le prénom est obligatoire',
            'email.required' => 'L\'adresse email est obligatoire',
            'email.email' => 'L\'adresse email doit avoir un format valide',
        ];
    }
}
