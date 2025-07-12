{{-- Extend da index --}}
@extends('index')

@section('content')
    <div class="d-flex justify-between flex-wrap fles-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Clientes</h1>
    </div>
    <div>
        <form action="{{ route('cliente.index') }}" method="get">
            <input name="pesquisar" placeholder="Digite o nome"/>
            <button>Pesquisar</button>
            <a href=" {{ route('cliente.create') }}" type="button" class="btn btn-success float-end">
            Incluir Cliente
            </a>
        </form>
    </div>
<div>_________________________________</div>
    <div class="table-responsive small">
        @if ($findCliente->isEmpty())
            <p>Sem dados de Clientes!</p>
            @else
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Cep</th>
                        <th>Logradouro</th>
                        <th>Num</th>
                        <th>Complemento</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>País</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($findCliente as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->telefone }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->cep }}</td>
                            <td>{{ $cliente->logradouro }}</td>
                            <td>{{ $cliente->numero }}</td>
                            <td>{{ $cliente->bairro }}</td>
                            <td>{{ $cliente->complemento }}</td>
                            <td>{{ $cliente->cidade }}</td>
                            <td>{{ $cliente->estado }}</td>
                            <td>{{ $cliente->pais }}</td>
                            <td>
                                <a href="{{ route('cliente.edit', ['id' => $cliente->id]) }}" class="btn btn-light btn-sm"> Editar </a>
                                <meta name='csrf-token' content="{{ csrf_token() }}" />
                                <a onclick="deleteRegistroPaginacao('{{ route('cliente.delete') }}', {{$cliente->id}})" class="btn btn-danger btn-sm">Excluir</a>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection