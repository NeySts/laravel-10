vamos cadastrar os usuários aqui

@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar Produto</h1> 
</div>
<form class="form" method="POST" action="{{ route('cliente.add') }}">
    @csrf
  <div class="mb-3">
    <label class="form-label" >Nome</label>
    <input type="text" value="{{ old('nome') }}" name="nome" class="form-control @error('nome') is-invalid @enderror " placeholder="Digite o nome do produto.">
    @if($errors->has('nome'))
        <div class="invalid-feedback">{{ $errors->first('nome')}}</div>
    @endif
  </div>
    <div class="mb-3">
    <label class="form-label" >Telefone</label>
    <input type="text" value="{{ old('telefone') }}" name="telefone" class="form-control @error('telefone') is-invalid @enderror " placeholder="Digite o telefone do produto.">
    @if($errors->has('telefone'))
        <div class="invalid-feedback">{{ $errors->first('telefone')}}</div>
    @endif
  </div>
    <div class="mb-3">
    <label class="form-label" >Email</label>
    <input type="text" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror " placeholder="Digite o email do produto.">
    @if($errors->has('email'))
        <div class="invalid-feedback">{{ $errors->first('email')}}</div>
    @endif
  </div>
    <div class="mb-3">
    <label class="form-label" >CEP</label>
    <input type="text" value="{{ old('cep') }}" name="cep" class="form-control @error('cep') is-invalid @enderror " placeholder="Digite o cep do produto.">
     @if($errors->has('cep'))
        <div class="invalid-feedback">{{ $errors->first('cep')}}</div>
    @endif
  </div>
    <div class="mb-3">
    <label class="form-label" >Logradouro</label>
    <input type="text" value="{{ old('logradouro') }}" name="logradouro" class="form-control @error('logradouro') is-invalid @enderror " placeholder="Digite o logradouro do produto.">
    
  </div>
    <div class="mb-3">
    <label class="form-label" >Número</label>
    <input type="text" value="{{ old('numero') }}" name="numero" class="form-control @error('numero') is-invalid @enderror " placeholder="Digite o número do produto.">
    @if($errors->has('numero'))
        <div class="invalid-feedback">{{ $errors->first('numero')}}</div>
    @endif   
  </div>  <div class="mb-3">
    <label class="form-label" >Complemento</label>
    <input type="text" value="{{ old('complemento') }}" name="complemento" class="form-control @error('complemento') is-invalid @enderror " placeholder="Digite o complemento do produto.">
    
  </div>
    <div class="mb-3">
    <label class="form-label" >Bairro</label>
    <input type="text" value="{{ old('bairro') }}" name="bairro" class="form-control @error('bairro') is-invalid @enderror " placeholder="Digite o bairro do produto.">
    
  </div>
    <div class="mb-3">
    <label class="form-label" >Cidade</label>
    <input type="text" value="{{ old('cidade') }}" name="cidade" class="form-control @error('cidade') is-invalid @enderror " placeholder="Digite o cidade do produto.">
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Estado</label>
    <input type="valor" value="{{ old('estado') }}" name="estado" id="mascara_estado" class="form-control @error('estado') is-invalid @enderror" placeholder="Digite o estado do produto.">
    
  </div>
    <div class="mb-3">
    <label  class="form-label">País</label>
    <input type="valor" value="{{ old('pais') }}" name="pais" id="mascara_pais" class="form-control @error('pais') is-invalid @enderror" placeholder="Digite o pais do produto.">
    
  </div>
  <button type="submit" class="btn btn-primary">Gravar</button>
</form>

@endsection