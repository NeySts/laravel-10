<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestCliente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'email' => 'nullable|email',
            'cep' => 'nullable|string|max:11',
            'logradouro' => 'nullable|string',
            'numero' => 'nullable|string|max:6',
            'complemento' => 'nullable|string|max:255',
            'bairro' => 'nullable|string',
            'cidade' => 'nullable|string',
            'estado' => 'nullable|string|max:2',
            'pais' => 'nullable|string'
        ];
    
    }

     public function messages()
    {
        return [
            'telefone.required' => 'O telefone é obrigatória.',
            'CEP.numeric' => 'O cep deve ser numeral.',
        ];
    }
}
