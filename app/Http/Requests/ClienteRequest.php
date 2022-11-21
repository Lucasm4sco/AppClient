<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'nome.required' => 'Preencha o campo nome', 
            'nome.max' => 'O nome deve ter um máximo de 100 caracteres',
            'email.required' => 'Preencha o campo email',
            'email.email' => 'Preencha com um e-mail válido',
            'email.max' => 'O e-mail deve ter um máximo de 100 caracteres',
            'endereco.required' => 'Preencha o campo endereco',
            'telefone.required' => 'Preencha o campo telefone',
            'telefone.max' => 'O telefone deve ter um máximo de 20 caracteres',
            'telefone.min' => 'O telefone precisa ter no minimo 6 caracteres'
        ];
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:100',
            'email' => 'required|email|max:100',
            'endereco' => 'required',
            'telefone' => 'required|max:20|min:6'
        ];
    }
}
