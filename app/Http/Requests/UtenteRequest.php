<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UtenteRequest extends FormRequest
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
            'username'=>'required',
            'email'=>'required|email',
            'telefone'=>'required|max:9|min:9',
            'nbi'=>'required|max:14|min:14',
            'image'=>'required',
            'password'=>'required',
            'password_confirma'=>'required',
            'data_nascimento'=>'required',
            //'morada'
            //'localidade'
           // 'entidade_financeira'
           // 'n_entidade_financeira'
           // 'entidade_financeira'
           
        ];
    }
    public function messages(): array
    {
        return [
                'username.required'=>'Esse campo é obrigatorio',
                'email.required'=>'Esse campo é obrigatorio',
                'email.email'=>'Email invalido',
                'telefone.required'=>'Esse campo é obrigatorio',
                'telefone.max'=>' O numero de telemovel tem que ter no maximo :max caracteres ',
                'telefone.min'=>' O numero de telemovel tem que ter no manimo :min caracteres ',
                'nbi.required'=>'ocampo é obrigatorio',
                'nbi.max'=>'o numero do bilhete tem que ter no maximo :max caracteres ',
                'nbi.min'=>'o numero do bilhete tem que ter no manimo :min caracteres ',
                'image.required'=>'É obrigatorio caregar uma imagem',
                'password.required'=>'Esse campo é obrigatorio',
                'password_confirma.required'=>'Esse campo é obrigatorio',
                'data_nascimento.required'=>'Esse campo é obrigatorio'
        ];
    }
}
