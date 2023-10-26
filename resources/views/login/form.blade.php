@extends('site.layout')
@section('title', 'Home')
@section('conteudo')
    <div class="row container">
        @if ($mensagem = Session::get('erro'))
            {{$mensagem}}
        @endif

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
                        <form action="{{ route('login.auth')}}" method="post" class="col s12">
                            @csrf
                            <div class="input-field">
                                <input id="email" type="email" name="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input id="password" type="password" name="password" class="validate">
                                <label for="password">Senha</label>
                            </div>
                            <p class="right-align"><a href="#">Esqueci a senha</a></p>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Login
                                <i class="material-icons right">send</i>
                            </button>
                            <p class="center-align">Não tem uma conta? <a href="#">Cadastre-se</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

