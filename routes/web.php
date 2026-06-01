<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;


Route::get('/', [TeamController::class, 'index']);
Route::get('/create', [TeamController::class, 'teams.create']);
Route::get('/edit', [TeamController::class, 'edit']);
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

