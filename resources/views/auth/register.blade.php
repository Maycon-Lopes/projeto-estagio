@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])

@section('auth_body')

<style>
body {
    background:
        linear-gradient(rgba(11,29,42,.85), rgba(11,29,42,.85)),
        url('/images/stadium.jpg') no-repeat center;
    background-size: cover;
}

.login-box,
.register-box {
    width: 450px;
}

.card {
    background: #132b3d !important;
    border: 1px solid #8cff00;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(140,255,0,.2);
}

.card-header {
    background: #1e303d;
    border-bottom: 1px solid #8cff00;
}

.card-header h1,
.card-header h2,
.card-header h3 {
    color: #8cff00;
}

.form-control {
    background: #1e303d !important;
    border: 1px solid #8cff00 !important;
    color: white !important;
}

.form-control:focus {
    box-shadow: 0 0 10px rgba(140,255,0,.5);
}

.form-control::placeholder {
    color: #bdbdbd;
}

.btn-success {
    background: #8cff00 !important;
    border: none !important;
    color: #0b1d2a !important;
    font-weight: bold;
}

.btn-success:hover {
    box-shadow: 0 0 15px #8cff00;
}

a {
    color: #8cff00 !important;
}

a:hover {
    color: white !important;
}
</style>

<div class="text-center mb-4">
    <p style="color:white;">
        Crie sua conta e faça parte da comunidade
    </p>
</div>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="input-group mb-3">
        <input type="text"
               name="name"
               class="form-control"
               placeholder="Nome completo"
               required>
    </div>

    <div class="input-group mb-3">
        <input type="email"
               name="email"
               class="form-control"
               placeholder="E-mail"
               required>
    </div>

    <div class="input-group mb-3">
        <input type="password"
               name="password"
               class="form-control"
               placeholder="Senha"
               required>
    </div>

    <div class="input-group mb-3">
        <input type="password"
               name="password_confirmation"
               class="form-control"
               placeholder="Confirmar senha"
               required>
    </div>

    <button type="submit" class="btn btn-success btn-block">
        Cadastrar
    </button>

    <div class="text-center mt-3">
        <a href="{{ route('login') }}">
            Já tenho uma conta
        </a>
    </div>

</form>

@stop