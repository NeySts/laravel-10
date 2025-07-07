<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        Produto::create([
            'nome'  => 'Mouse',
            'valor' => '9.00'
        ]);
         Produto::create([
            'nome'  => 'Computador',
            'valor' => '5.000'
        ]);
         Produto::create([
            'nome'  => 'Lápis de cor',
            'valor' => '7.00'
        ]);
    }
}
