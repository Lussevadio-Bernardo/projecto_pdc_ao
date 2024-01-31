<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultaRequest extends FormRequest
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
            //
            'name'=>'required',
            'email'=>'required|email',
            'contacto'=>'required|max:9',
            'messagem'=>'required|min:9'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>'Esse campo é obrigatorio',
            'email.required'=>'Esse campo é obrigatorio',
            'email.email'=>'Email invalido',
            'contacto.required'=>'Esse campo é obrigatorio',
            'contacto.max'=>' O numero de telemovel tem que ter no maximo :max caracteres ',
            'messagem.required'=>'Esse campo é obrigatorio',
            'messagem.min'=>' O a mensagem tem que ter no maximo :min caracteres '
        ];
    }
}
