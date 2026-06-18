@extends('adminlte::page')

@section('title', 'Times')

@section('content_header')
    <h1>Times Cadastrados</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lista de Times</h3>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Escudo</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Contato</th>
                    <th width="180">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $team->logo) }}"
                                 width="50"
                                 height="50"
                                 style="object-fit:cover;">
                        </td>

                        <td>{{ $team->name }}</td>
                        <td>{{ $team->city }}</td>
                        <td>{{ $team->contact }}</td>

                        <td>
                            <a href="{{ route('teams.edit', $team->id) }}"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="{{ route('teams.destroy', $team->id) }}"
                                  method="POST"
                                  style="display:inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Excluir este time?')">
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-3">
            {{ $teams->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@stop