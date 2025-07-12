caiu no editar...

@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Editar Produto</h1> 
</div>
<form class="form" method="POST" action="{{ route('cliente.update', ['id' => $findCliente->id]) }}">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label class="form-label" >Nome</label>
    <input type="text" value="{{ isset($findCliente->nome) ? $findCliente->nome : old('nome') }}" name="nome" class="form-control ">
    @if($errors->has('nome'))
        <div class="invalid-feedback">{{ $errors->first('nome')}}</div>
    @endif
  </div>
    <div class="mb-3">
    <label class="form-label" >Telefone</label>
    <input type="text" value="{{ isset($findCliente->telefone) ? $findCliente->telefone : old('telefone') }}" name="telefone" class="form-control @error('telefone') is-invalid @enderror " >
  
  </div>
    <div class="mb-3">
    <label class="form-label" >Email</label>
    <input type="text" value="{{ isset($findCliente->email) ? $findCliente->email : old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror " >

  </div>
    <div class="mb-3">
    <label class="form-label" >CEP</label>
    <input type="text" value="{{ isset($findCliente->cep) ? $findCliente->cep : old('cep') }}" name="cep" class="form-control @error('cep') is-invalid @enderror " >
   
  </div>
    <div class="mb-3">
    <label class="form-label" >Logradouro</label>
    <input type="text" value="{{ isset($findCliente->logradouro) ? $findCliente->logradouro : old('logradouro') }}" name="logradouro" class="form-control @error('logradouro') is-invalid @enderror ">
    
  </div>
    <div class="mb-3">
    <label class="form-label" >Número</label>
    <input type="text" value="{{ isset($findCliente->numero) ? $findCliente->numero : old('numero') }}" name="numero" class="form-control @error('numero') is-invalid @enderror ">
   
  </div>  <div class="mb-3">
    <label class="form-label" >Complemento</label>
    <input type="text" value="{{ isset($findCliente->complemento) ? $findCliente->complemento : old('complemento')}}" name="complemento" class="form-control @error('numero') is-invalid @enderror ">
  </div>
    <div class="mb-3">
    <label class="form-label" >Bairro</label>
    <input type="text" value="{{ isset($findCliente->bairro) ? $findCliente->bairro : old('bairro') }}" name="bairro" class="form-control @error('bairro') is-invalid @enderror " >
    
  </div>
    <div class="mb-3">
    <label class="form-label" >Cidade</label>
    <input type="text" value="{{ isset($findCLiente->cidade) ? $findCliente->cidade : old('cidade') }}" name="cidade" class="form-control @error('cidade') is-invalid @enderror " >
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Estado</label>
    <input type="valor" value="{{ isset($findCliente->estado) ? $findCliente->estado : old('estado') }}" name="estado" id="mascara_estado" class="form-control @error('estado') is-invalid @enderror" >
    
  </div>
    <div class="mb-3">
    <label  class="form-label">País</label>
    <input type="valor" value="{{ isset($findCliente->pais) ? $findCliente->pais : old('pais') }}" name="pais" id="mascara_pais" class="form-control @error('pais') is-invalid @enderror" >
    
  </div>
  <button type="submit" class="btn btn-primary">Gravar</button>
</form>

@endsection