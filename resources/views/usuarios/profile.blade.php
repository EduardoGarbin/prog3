@extends('templates.base')
@section('title', 'Usuários')
@section('h1', 'Página de Usuários')

@section('content')

<div class="row">
    <div> ID: {{ Auth::user()->id }} </div>
    <div> Usuário: {{ Auth::user()->name }} </div>
    <div> E-mail: {{ Auth::user()->email }} </div>
</div>
<div class="col-md-4">
    <a href="{{ route('profile.edit')}}">
        <button class="btn btn-success"> Alterar dados </button>
    </a>
    <a href="{{ route('profile.password')}}">
        <button class="btn btn-success"> Alterar senha </button>
    </a>
</div>
@endsection