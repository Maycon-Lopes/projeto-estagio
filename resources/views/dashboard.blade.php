@extends('adminlte::page')

@section('tittle', 'TimeConectado')

@section('css')
    @vite('resources/css/style.css')
@stop


@section('content')

<div class="card bg-dark">
    <div class="card-body text-center">
        <h1 class="text-success">
            ⚽ <b>Time</b>Conectado
        </h1>

        <p>
            Cadastre seu time, encontre adversários e participe de campeonatos.
        </p>
    </div>
</div>
    <div class="row">
    <div class="col-lg-4">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ \App\Models\Team::count() }}</h3>
                <p>Times cadastrados</p>
            </div>
            <div class="icon">
                <i class="fas fa-futbol"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ \App\Models\User::count() }}</h3>
                <p>Usuários</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>
</div>
@stop