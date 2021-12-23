@extends('templates.base')
@section('title', 'Inserir Usuário')
@section('h1', 'Inserir Usuário')

@section('content')

<div class="row">
    <table class="table table-hover table-bordered" style="margin: 5px 0px 25px 12px;">
        <tr>
            <th> ID </th>
            <th width="60%"> Nome </th>
            <th> E-mail </th>
        </tr>
        <tbody>
            <tr>
                <td> {{ Auth::user()->id }} </td>
                <td> {{ Auth::user()->name }} </td>
                <td> {{ Auth::user()->email }} </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col">
    <a href="{{ route('profile.edit')}}" style="margin-right: 10px;">
        <button class="btn btn-primary"> Alterar dados </button>
    </a>
    <a href="{{ route('profile.password')}}">
        <button class="btn btn-secondary"> Alterar senha </button>
    </a>
</div>
@endsection