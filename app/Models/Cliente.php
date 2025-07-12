<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public $fillable = [
        'nome',
        'telefone',
        'email',
        'cep',
        'logradouro',
        'num',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'pais',
    ];

    public function getClientePesquisarIndex(string $search = ''){
        
        $cliente = $this->where(function ($query) use ($search){
            if($search){
                $query->where('nome', $search);
                $query->orWhere('nome', 'LIKE', "%{$search}%"); 
            }
        })->get();

        return $cliente;
    }
}
