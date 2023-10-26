@extends('site.layout')
@section('title', 'Home')
@section('conteudo')
    <div class="row container">
        <h1>Olá {{auth()->user()->firstName}}</h1>        
    </div>
@endsection