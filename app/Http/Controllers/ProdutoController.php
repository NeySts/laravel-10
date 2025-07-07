<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{   
    public $produto;

    public function __construct(Produto $produto) {
        $this->produto = $produto;
    }
    public function index(Request $request){

        $pesquisar = $request->pesquisar;
        $findProduto = $this->produto->getProdutoPesquisarIndex(search: $pesquisar ?? '');

        // $findProduto = Produto::all();
        return view('page.produto.paginacao', compact('findProduto')); 
    }
    public function add(){
        return "Adcionando Produtos";
    }

    public function delete (Request $request){

    }
}
