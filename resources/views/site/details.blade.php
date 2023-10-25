@extends('site.layout')
@section('title', 'Detalhes')
@section('conteudo')
    <div class="row container">
        <div class="col s12 m6">
            <img src="{{$produto->imagem}}" alt="Imagem do produto" class="responsive-img">
        </div>
        <div class="col s12 m6">
            <h4>{{$produto->nome}}</h4>
            <h4>R${{number_format($produto->preco, 2, ',', '.') }}</h4>
            <p>{{$produto->descricao}}</p>
            <p>Postado por: {{$produto->user->firstName}}</p>
            <p>Categoria: {{$produto->categoria->nome}}</p>
            <button class="btn orange btn-large">COMPRAR</button>
        </div>
    </div>
@endsection