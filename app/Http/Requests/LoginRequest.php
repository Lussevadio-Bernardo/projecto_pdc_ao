<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'user'=>'required|email',
            'password'=>'required|min:5'
        ];
    }
    public function messages(): array
    {
        return [
            //
            'user.required'=>'Esse campo é obrigatorio',
            'user.email'=>'Email invalido',
            'password.required'=>'Esse campo é obrigatorio',
            'password.min'=>' A palavra passe tem que ter no mínimo :min caracteres '
        ];
    }
}
