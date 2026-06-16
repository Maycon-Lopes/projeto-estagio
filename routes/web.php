<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;


Route::get('/', [TeamController::class, 'index']);
Route::get('/create', [TeamController::class, 'teams.create']);
Route::get('/times', [TeamController::class, 'showTeams'])->name('times');
Route::get('/contatos', [TeamController::class, 'showContacts'])->name('contatos');
Route::get('/tabela', [TeamController::class, 'showTeams'])->name('table');

Route::get('/tabela', function() {
    return view('teams.table');
});

Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('teams', TeamController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

