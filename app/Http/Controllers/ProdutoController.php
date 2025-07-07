<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Requests\FormRequestProduct;
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

        $id = $request->id;
        $buscarRegistro = Produto::find($id);
        $buscarRegistro->delete();

        return response()->json(['success' => true]);
    }

    public function addProduct(FormRequestProduct $request){

        if($request->method() == 'POST'){
            $data = $request->all();
            Produto::create($data);
            return redirect()->route('produto.index');
        }else{

            return view('page.produto.create');
        }
    }
}
