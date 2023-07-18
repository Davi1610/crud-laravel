@extends('layouts.app')

@section('title',"sds")
@section('content')
<div class="container mt-5"></div>
<div class="row">
  <div class="col-sm-10">
  <h1>Listagem de Produtos</h1>
  </div>
  <div class="col-sm-2">
    <a href="{{route('produtos-create') }}" class="btn btn-success">Novo Produto</a>
  </div>  
</div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Descrição</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produtos as $produto)
    <tr>
      <th>{{$produto->id}}</th>
      <th>{{$produto->nome}}</th>
      <th>{{$produto->valor}}</th>
      <th>{{$produto->descricao}}</th>
      <th>
        <a href="{{route ('produtos-edit', ['id'=>$produto->id]) }}" class="btn btn-primary">Editar</a>
        <form action="{{ route('produtos-destroy', ['id'=>$produto->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Deletar</button> 
        </form>
      </th>

    </tr>
    @endforeach
  </tbody>
</table> 
</div>

@endsection