@extends('adminlte::page')

@section('title', 'Meu Perfil')

@section('content')

<div class="card" style="margin-top: 20px;">
    <div class="card-header">
        <h3 class="card-title">Editar Perfil</h3>
    </div>

    <div class="card-body">

        <form method="POST"
              action="{{ route('user') }}"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')
                        
            @if(auth()->user()->photo)
                <div class="text-center mb-3">
                    <img src="{{ asset('storage/' . auth()->user()->photo) }}"
                         width="120"
                         class="img-circle">
                </div>
            @endif

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
                <label>Foto</label>

                <input type="file"
                       name="photo"
                       class="form-control">
            </div>

            <button class="btn btn-success">
                Salvar
            </button>

        </form>

    </div>
</div>

@stop