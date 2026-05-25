<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;


Route::get('/', [TeamController::class, 'index']);
Route::get('/create', [TeamController::class, 'teams.create']);
Route::view('/register', 'auth.register');
Route::view('/login', 'auth.login');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('teams', TeamController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

