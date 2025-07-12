<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRequestCliente;
use App\Models\Cliente;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class ClienteController extends Controller
{   
    public $cliente;

    public function __construct(Cliente $cliente){
        $this->cliente = $cliente;
    }
    public function index(Request $request){

        // $findCliente = Cliente::all();

        // pesquisar é o name do input no formulario
        // na chamada do request
        $pesquisar = $request->pesquisar;
        // usando Eloquent ORM
        $findCliente = $this->cliente->getClientePesquisarIndex(search: $pesquisar ?? '');
        return view('page.cliente.paginacao', compact('findCliente'));
    } 

    public function create(){
        return view('page.cliente.create');
    }

    public function add(FormRequestCliente $request){

        Cliente::create($request->validated());

        return redirect()->route('cliente.index');
    }

    //exibe o formulário com os dados preenchidos
    public function edit($id){
            $findCliente = Cliente::findorFail($id);
            // $findCliente = Cliente::where('id','=',$id)->first();
            return view('page.cliente.edit', compact('findCliente'));
        }

    //atualiza os dados na base
    public function update(FormRequestCliente $request, $id){    
    
        $findCliente = Cliente::findorFail($id);
        $findCliente->update($request->validated());
    
        return redirect()->route('cliente.index');
    }

    public function delete(Request $request){

        $findCliente = Cliente::find($request->id); 
        $findCliente->delete();

        return response()->json(['success' => true]);
    }
}
