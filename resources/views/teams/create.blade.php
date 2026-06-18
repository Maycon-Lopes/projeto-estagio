@extends('adminlte::page')

@section('title', 'Cadastro de Times')

@section('css')
    @vite('resources/css/style.css')
@stop

@section('content')

<div class="row justify-content-center" style="margin-top: 20px;">

    <div class="col-md-8">

        <div class="card shadow">

            <div class="card-header">
                <h3 class="card-title">
                    Cadastre seu Time
                </h3>
            </div>

            <div class="card-body">

                <form method="POST"
                      action="{{ route('teams.store') }}"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label>Nome do time</label>
                        <input type="text"
                               name="name"
                               class="form-control">
                               @error('name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label>Email para contato</label>
                        <input type="email"
                               name="contact"
                               class="form-control">
                               @error('contact')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text"
                               name="city"
                               class="form-control">
                               @error('city')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label>Escudo</label>

                        <input type="file"
                                name="logo"
                                class="form-control @error('logo') is-invalid @enderror">
                            @error('logo')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                            @enderror
                    </div>

                    <button class="btn btn-success btn-lg">
                        ⚽ Cadastrar Time
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>
@stop