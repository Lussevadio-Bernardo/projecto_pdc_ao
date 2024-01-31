<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EspecialidadeRequest extends FormRequest
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
            'nome'=>'required',
            'area'=>'required|min:7'
        ];
    }
    public function messages(): array
    {
        return [
            //
            'nome.required'=>'Esse campo é obrigatorio',
            'area.required'=>'Esse campo é obrigatorio',
            'area.min'=>' A palavra passe tem que ter no mínimo :min caracteres '
        ];
    }
}
