@extends('layouts.app')

@section('content')

@vite('resources/css/style.css')

<header>

    <div class="logo"><a href="/">⚽ <span>TIME</span> CONECTADO</a></div>

    <nav>
        <a href="/">início</a>
        <a href="{{ route('contatos') }}">Contatos</a>
        <a href="{{ route('teams.create') }}" class="btn-topo">Cadastre seu time</a>
    </nav>
</header>

<div class="times-box">
            <h2>⚽ Times cadastrados</h2>
            @if ($teams->isEmpty())
                <h3>Nenhum time cadastrado.</h3>
            @else
                <div class="lista-times">
                    @foreach ($teams as $team) 
                        <div class="time-card">
                            <h3>{{ $team->name }}</h3>
                            <img src="{{ asset('storage/' . $team->logo) }}" width="80">
                            <a href="{{ route('teams.edit', $team->id) }}"class="btn-editar">Editar</a>
                            <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-excluir" onclick="return confirm('Tem certeza que deseja excluir este time?')">Excluir</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>


@endsection