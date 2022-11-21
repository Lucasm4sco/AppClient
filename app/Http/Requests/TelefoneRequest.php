<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TelefoneRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'titulo.required' => 'Preencha o campo telefone',
            'titulo.max' => 'O titulo deve ter um máximo de 40 caracteres',
            'telefone.required' => 'Preencha o campo telefone',
            'telefone.max' => 'O telefone deve ter um máximo de 20 caracteres',
            'telefone.min' => 'O telefone precisa ter no minimo 6 caracteres',
        ];
    }

    public function rules()
    {
        return [
            'titulo' => 'required|max:40',
            'telefone' => 'required|max:20|min:6'
        ];
    }
}
