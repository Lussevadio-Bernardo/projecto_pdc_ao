<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PalavrapassRequest extends FormRequest
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
            'senha_antiga'=>'required',
            'senha_nova'=>'required|max:224|min:6',
            'confirmar_senha'=>'required|max:224|min:6',
        ];
    }
    public function messages(): array
{
    return [
            'senha_antiga.required'=>'Esse campo é obrigatorio',
            'senha_nova.required'=>'Esse campo é obrigatorio',
            'senha_nova.max'=>' A senha tem que ter no maximo :max caracteres ',
            'senha_nova.min'=>' A senha  tem que ter no manimo :min caracteres ',
           
            'confirmar_senha.required'=>'Esse campo é obrigatorio',
            'confirmar_senha.max'=>'A senha  tem que ter no maximo :max caracteres ',
            'confirmar_senha.min'=>'A senha  tem que ter no manimo :min caracteres '
           
    ];
}
}
