@extends('templates.base')
@section('title', 'Usuários')
@section('h1', 'Página de Usuários')

@section('content')
<div class="row">
    <div class="col-4">
        <form method="post" action="{{ route('profile.password') }}">
            @csrf
            <div class="mb-3">
                <label for="senha_antiga" class="form-label"> Senha Antiga: </label>
                <input type="password" name="senha_antiga" class="form-control"/>
            </div>
            <div class="mb-3">
                <label for="nova_senha" class="form-label"> Nova Senha: </label>
                <input type="password" name="senha_nova" class="form-control"/>
            </div>
            <div class="mb-3">
                <label for="repetir_senha" class="form-label"> Repetir Senha: </label>
                <input type="password" name="repetir_senha" class="form-control"/>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary"> Gravar </button>
            </div>
        </form>
    </div>
</div>
@endsection