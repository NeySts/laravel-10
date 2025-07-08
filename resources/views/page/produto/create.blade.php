@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar Produto</h1> 
</div>
<form class="form" method="POST" action="{{ route('cadastrar.produto') }}">
    @csrf
  <div class="mb-3">
    <label class="form-label" >Nome</label>
    <input type="text" value="{{ old('nome') }}" name="nome" class="form-control @error('nome') is-invalid @enderror " placeholder="Digite o nome do produto.">
    @if($errors->has('nome'))
        <div class="invalid-feedback">{{ $errors->first('nome')}}</div>
    @endif
  </div>
  <div class="mb-3">
    <label  class="form-label">Valor</label>
    <input type="valor" value="{{ old('valor') }}" name="valor" id="mascara_valor" class="form-control @error('valor') is-invalid @enderror" placeholder="Digite o valor do produto.">
    @if($errors->has('valor'))
      <div class="invalid-feedback">{{$errors->first('valor')}}</div>
    @endif
  </div>
  <button type="submit" class="btn btn-primary">Gravar</button>
</form>
@endsection