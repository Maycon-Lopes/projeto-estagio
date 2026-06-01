@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('auth_body')

<style>
body {
    background: url('/images/stadium.jpg') no-repeat center;
    background-size: cover;
}

.card {
    background: rgba(0,0,0,0.85);
    color: white;
    border-radius: 10px;
}
</style>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="E-mail">
    </div>

    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Senha">
    </div>

    <button type="submit" class="btn btn-success btn-block">
        Entrar
    </button>
</form>

@stop