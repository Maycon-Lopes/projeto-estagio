@extends('adminlte::page')

@section('title', 'Meu Perfil')

@section('content_header')
    <h1>Meu Perfil</h1>
@stop

@section('css')
    @vite('resources/css/style.css')
@stop

@section('content')

<div class="card card-outline card-success">

    <div class="card-header">
        <h3 class="card-title">Informações do Usuário</h3>
    </div>

    <div class="card-body">

        <div class="text-center mb-4">

            @if(auth()->user()->photo)
                <img src="{{ asset('storage/' . auth()->user()->photo) }}"
                     class="img-circle elevation-2"
                     width="150"
                     height="150"
                     style="object-fit: cover;">
            @endif

            <h3 class="mt-3">{{ auth()->user()->name }}</h3>

            <p>
                {{ auth()->user()->email }}
            </p>

        </div>

        <form action="{{ route('user') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nome</label>

                <input type="text"
                       name="name"
                       class="form-control"
                       value="{{ auth()->user()->name }}">
            </div>

            <div class="form-group">
                <label>Email</label>

                <input type="email"
                       name="email"
                       class="form-control"
                       value="{{ auth()->user()->email }}">
            </div>

            <div class="form-group">
                <label>Foto de Perfil</label>

                <input type="file"
                       name="photo"
                       class="form-control">
            </div>

            <button type="submit"
                    class="btn btn-success">
                Salvar Alterações
            </button>

        </form>

    </div>

</div>

@stop