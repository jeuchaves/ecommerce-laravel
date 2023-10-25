@extends('site.layout')

@section('title', 'Essa é a página home')

@section('conteudo')
    @include('includes.mensagem', ['titulo' => 'mensagem de sucesso'])

    @component('components.sidebar')
        @slot('paragrafo')
            Texto qualquer vindo do slot
        @endslot
    @endcomponent
@endsection