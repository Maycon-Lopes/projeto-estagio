@extends('layouts.app')

@section('title', 'Time Conectado')

@section('content')

@vite('resources/css/style.css')

<header>

    <div class="logo"><a href="/">⚽ <span>TIME</span> CONECTADO</a></div>

    <nav>
        <a href="{{ route('times') }}">Times</a>
        <a href="{{ route('contatos') }}">Contatos</a>
    </nav>


</header>

<section class="hero">
    <div class="conteudo">
        <h1>Mais que um site,<br><span>uma paixão!</span></h1>
        <p>
            Cadastre seu time, encontre adversários,
            participe de campeonatos e mostre a força do seu futebol.
        </p>

        <a href="{{ route('times') }}" class="btn-principal">Faça Parte</a>
    </div>
</section>

@endsection