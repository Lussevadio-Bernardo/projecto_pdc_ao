<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class horaRequest extends FormRequest
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
            'data_atendimento'=>'required',
            'hora_atendimento'=>'required'
        ];
    }
    public function messages(): array
    {
        return [
            //
            'data_atendimento.required'=>'Esse campo é obrigatorio',
            'hora_atendimento.required'=>'Esse campo é obrigatorio'
        ];
    }
}
