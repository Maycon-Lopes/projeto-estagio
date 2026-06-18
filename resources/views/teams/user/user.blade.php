@extends('adminlte::page')

@section('title', 'Meu Perfil')

@section('content')

<div class="card" style="margin-top: 10px;">
    <div class="card-header bg-success">
        <h3 class="card-title">Informações do Usuário</h3>
    </div>

    <div class="card-body">

        <p>
            <strong>Nome:</strong>
            {{ auth()->user()->name }}
        </p>

        <p>
            <strong>Email:</strong>
            {{ auth()->user()->email }}
        </p>

    </div>
</div>

@stop
