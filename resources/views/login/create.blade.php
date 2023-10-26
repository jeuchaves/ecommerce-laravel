@extends('site.layout')
@section('title', 'Cadastrar')
@section('conteudo')
    <div class="row container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        @endif
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align">
                            <a href="#" class="brand-logo center">Curso Laravel</a>
                        </span>
                        <p class="center-align">
                            Por favor, faça login para continuar.
                        </p>
                        <form action="{{ route('users.store')}}" method="post" class="col s12">
                            @csrf
                            <div class="input-field">
                                <input type="text" name="firstName" id="firstName" class="validate">
                                <label for="firstName">Nome</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="lastName" id="lastName" class="validate">
                                <label for="firstName">Sobrenome</label>
                            </div>
                            <div class="input-field">
                                <input id="email" type="email" name="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input id="password" type="password" name="password" class="validate">
                                <label for="password">Senha</label>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

