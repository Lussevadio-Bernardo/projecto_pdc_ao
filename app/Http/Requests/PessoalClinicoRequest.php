<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoalClinicoRequest extends FormRequest
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
                'nome'=>'required',
                'email'=>'required|email',
                'ter'=>'required|max:9|min:9',
                'nbi'=>'required|max:14|min:14',
                'image'=>'required'
        ];
    }

    public function messages(): array
    {
        return [
            //
                'nome.required'=>'Esse campo é obrigatorio',
                'email.required'=>'Esse campo é obrigatorio',
                'email.email'=>'Email invalido',
                'ter.required'=>'Esse campo é obrigatorio',
                'ter.max'=>' O numero de telemovel tem que ter no maximo :max caracteres ',
                'ter.min'=>' O numero de telemovel tem que ter no manimo :min caracteres ',
                'nbi.required'=>'ocampo é obrigatorio',
                'nbi.max'=>'o numero do bilhete tem que ter no maximo :max caracteres ',
                'nbi.min'=>'o numero do bilhete tem que ter no manimo :min caracteres ',
                'image.required'=>'É obrigatorio caregar uma imagem'
        ];
    }
}
