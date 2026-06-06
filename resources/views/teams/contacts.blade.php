@extends('layouts.app')

@section('content')

@vite('resources/css/style.css')

<header>

    <div class="logo"><a href="/">⚽ <span>TIME</span> CONECTADO</a></div>

    <nav>
        <a href="/">início</a>
        <a href="{{ route('times')}}">Times</a>
        <a href="{{ route('teams.create') }}" class="btn-topo">Cadastre seu time</a>
    </nav>
</header>

<div class="times-box">
            <h2>⚽ Times cadastrados</h2>
            @if ($teams->isEmpty())
                <h3>Nenhum contato cadastrado.</h3>
            @else
                <div class="lista-times">
                    @foreach ($teams as $team) 
                        <div class="contacts-card">
                            <div class="contacts-card">
                                <h3>{{ $team->name }}</h3>
                            
                                <div class="contact-info">
                                     {{ $team->contact }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>


@endsection