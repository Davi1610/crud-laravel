@extends('layouts.app')

@section('title',"sds")
@section('content')
<div class="container">
    <h1>Cadastre um produto novo</h1>
    <hr>
    <form action="{{ route('produtos-store') }}" method="POST">
        @csrf

        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">Preço:</label>
                <input type="text" class="form-control" name="valor" placeholder="Digite um preço...">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">Descrição:</label>
                <input type="text" class="form-control" name="descricao" placeholder="Digite uma descrição...">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
@endsection