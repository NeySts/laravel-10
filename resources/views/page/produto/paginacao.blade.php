{{-- Extends da index --}}
@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Produtos</h1> 
    </div>
    <div>
        <form action=" {{ route('produto.index') }}" menthod='get'>
            <input name="pesquisar" aria-placeholder="Digite o nome"/>
            <button>Pesquisar</button>
            <a href="{{ route('cadastrar.produto') }}" type="button" class="btn btn-success float-end">
                Incluir Produto
            </a>
        </form>
    </div>
<h2>Section title</h2>
<div class="table-responsive small"> 
    @if ($findProduto->isEmpty())
        <p>Produto Não Cadastrado!</p>
    @else
        <table class="table table-striped table-sm"> 
            <thead> <tr> 
                <th >#</th> 
                <th >Nome</th>
                <th >Valor</th> 
                <th >Ações</th> 
            </thead>
            <tbody>
                @foreach ($findProduto as $produto)
                <tr>
                    <td>{{ $produto->id }}</td> 
                    <td>{{ $produto->nome }}</td>
                    <td>{{ 'R$'.' '.number_format($produto->valor, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('editar.produto', ['id' =>$produto->id]) }}" class="btn btn-light btn-sm"> Editar</a>
                        <meta name='csrf-token' content="{{ csrf_token() }}"/>
                        <a onclick="deleteRegistroPaginacao('{{ route('produto.delete') }}', {{$produto->id}})" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
    @endif
</div> 

@endsection
