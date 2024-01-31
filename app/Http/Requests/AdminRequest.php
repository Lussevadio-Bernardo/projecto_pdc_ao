<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'email'=>'required|email',
            'terminal'=>'required|max:9|min:9',
            'bi'=>'required|max:14|min:14',
            'imagem'=>'required'
        ];
    }
    public function messages(): array
    {
        return [
            //
                'nome.required'=>'Esse campo é obrigatorio',
                'email.required'=>'Esse campo é obrigatorio',
                'email.email'=>'Email invalido',
                'terminal.required'=>'Esse campo é obrigatorio',
                'terminal.max'=>' O numero de telemovel tem que ter no maximo :max caracteres ',
                'terminal.min'=>' O numero de telemovel tem que ter no manimo :min caracteres ',
                'bi.required'=>'o campo é obrigatorio',
                'bi.max'=>'o numero do bilhete tem que ter no maximo :max caracteres ',
                'bi.min'=>'o numero do bilhete tem que ter no manimo :min caracteres ',
                'imagem.required'=>'É obrigatorio caregar uma imagem'
        ];
    }
}
