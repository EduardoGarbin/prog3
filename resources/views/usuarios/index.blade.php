@extends('templates.base')
@section('title', 'Usuários')
@section('h1', 'Página de Usuários')

@section('content')
<div class="row">
    <div class="col">
        <p style="font-size: 20px;">Sejam bem-vindos à página de usuários</p>

        <a class="btn btn-primary" href="{{route('usuarios.inserir')}}" role="button">Cadastrar usuário</a>

    </div>
</div>

<div class="row">
    <table class="table table-hover table-bordered" style="margin: 20px 0px 0px 12px;">
        <tr>
            <th>ID</th>
            <th width="50%">Nome</th>
            <th>E-mail</th>
        </tr>

        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>
            <!-- <td>{{ $usuario->admin }}</td> -->
        </tr>
        @endforeach
    </table>
</div>
@endsection