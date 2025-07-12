<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => "João da Silva",
            'telefone' => '41 99678-5533',
            'email' => 'joaos@hotmail.com',
            'cep' => '81240-230',
            'logradouro' => 'Rua da Fé',
            'numero' => '124',
            'complemento' => 'Casa rosa',
            'bairro' => 'Jardim Social',
            'cidade' => 'Fortaleza',
            'estado' => 'Ceará',
            'pais' => 'BR',
        ]);
        Cliente::create([
            'nome' => 'Vinicius Solares',
            'telefone' => '4899642589999',
            'email' => 'vs@gmail.com',
            'cep' => '81240-135',
            'logradouro' => 'Rua Central',
            'numero' => '12499',
            'complemento' => 'Casa 22',
            'bairro' => 'Centro',
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'pais' => 'Brasil'
        ]);
        Cliente::create([
            'nome' => 'Pedro do Chapéu',
            'telefone' => '4199633589999',
            'email' => 'pc@icloud.com',
            'cep' => '81240-735',
            'logradouro' => 'Rua virginio',
            'numero' => '3456',
            'complemento' => 'Apt 123',
            'bairro' => 'Centro',
            'cidade' => 'São Francisco',
            'estado' => 'California',
            'pais' => 'US'
        ]);
    }
}
