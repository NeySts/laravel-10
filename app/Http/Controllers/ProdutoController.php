<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Componentes;
use App\Http\Requests\FormRequestProduct;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
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
            $componentes = new Componentes();
            $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
            Produto::create($data);
            Toastr::success('Gravado com sucesso');
            return redirect()->route('produto.index');
        }
        return view('page.produto.create');

    }
    public function editProduct(FormRequestProduct $request, $id){
        if($request->method() == 'PUT'){
            $data = $request->all();
            $componentes = new Componentes();
            $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
            $buscaRegistro = Produto::find($id);
            $buscaRegistro->update($data);
            return redirect()->route('produto.index');
        }
        $findProduto = Produto::where('id', '=', $id)->first();    
        return view('page.produto.edit', compact('findProduto'));
        
    }
}
