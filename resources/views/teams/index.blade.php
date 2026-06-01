@extends('layouts.app')

@section('content')

@vite('resources/css/app.css')

<header>

@vite('resources/css/app.css')

  

    <div class="logo">⚽ <span>TIME</span> CONECTADO</div>

    <nav>
        <a href="#">Início</a>
        <a href="#">Times</a>
        <a href="#">Jogos</a>
        <a href="#">Campeonatos</a>
        <a href="#">Jogadores</a>
        <a href="#">Notícias</a>
        <a href="#">Contato</a>
    </nav>

    <button class="btn-topo"><a href="{{ route('teams.create') }}">Cadastre seu time</a></button>
</header>

<section class="hero">
    <div class="conteudo">
        <h1>Mais que um site,<br><span>uma paixão!</span></h1>

        <p>
            Cadastre seu time, encontre adversários,
            participe de campeonatos e mostre a força do seu futebol.
        </p>

        <button class="btn-principal">Faça parte</button>
    </div>
</section>

<!-- LISTA DE TIMES (SEU CÓDIGO) -->
<div class="times-box">
    <h2>⚽ Times cadastrados</h2>

    @if ($teams->isEmpty())
        <p>Nenhum time cadastrado.</p>
    @else
        <div class="lista-times">
            @foreach ($teams as $team) 
                <div class="time-card">
                    {{ $team->name }}
                    <img src="{{ asset('storage/' . $team->logo) }}" width="80">
                </div>
            @endforeach
        </div>
    @endif
</div>

@endsection