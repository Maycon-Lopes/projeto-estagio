<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProfileController;

Route::get('/', [TeamController::class, 'index']);
Route::get('/create', [TeamController::class, 'teams.create']);
Route::get('/times', [TeamController::class, 'showTeams'])->name('times');
Route::get('/contatos', [TeamController::class, 'showContacts'])->name('contatos');
Route::get('/tabela', [TeamController::class, 'tableTeams'])->name('table');

Route::get('/user', function() {
    return view('teams.user.user-edit');
})->middleware('auth');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/user', [ProfileController::class, 'edit'])
    ->name('user');

Route::put('/user', [ProfileController::class, 'update'])
    ->name('user');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('teams', TeamController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

