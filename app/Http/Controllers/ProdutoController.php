<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $findProduto = Produto::all();
        return view('page.produto.paginacao', compact('findProduto')); 
    }
    public function add(){
        return "Adcionando Produtos";
    }
}
