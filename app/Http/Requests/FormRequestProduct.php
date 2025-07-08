<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestProduct extends FormRequest
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
        // Validando o método se for do tipo 'get' volta para a lista sem fazer nada
        $request = [];
        if($this->method() == "POST" || $this->method() == 'PUT'){
            $request = [
                'nome' => 'required',
                'valor' => 'required'
            ];
        }
        return $request;
    }
}
