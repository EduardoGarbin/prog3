@extends('templates.base')
@section('title', 'Usuários')
@section('h1', 'Página de Usuários')

@section('content')
<div class="row">
    <div class="col-4">
        <form method="post" action="{{ route('profile.edit') }}">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome: </label>
                <input type="text" value="{{ Auth::user()->name }}" name="nome" class="form-control"/>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label"> E-mail: </label>
                <input type="text" value="{{ Auth::user()->email }}" name="email" class="form-control"/>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary"> Gravar </button>
            </div>
        </form>
    </div>
</div>
@endsection