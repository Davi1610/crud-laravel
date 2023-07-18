@extends('layouts.app')

@section('title',"sds")
@section('content')
<div class="container">
    <h1>Editar o Produto</h1>
    <hr>
    <form action="{{ route('produtos-update',['id'=>$produtos->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value="{{ $produtos->nome }}" placeholder="Digite um nome...">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">Preço:</label>
                <input type="text" class="form-control" name="valor"value="{{ $produtos->valor }}" placeholder="Digite um preço...">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">Descrição:</label>
                <input type="text" class="form-control" name="descricao" value="{{ $produtos->descricao }}" placeholder="Digite uma descrição...">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
            </div>
        </div>
    </form>
</div>
@endsection