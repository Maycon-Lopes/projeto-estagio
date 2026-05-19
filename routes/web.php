<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;


Route::get('/', [TeamController::class, 'index']);

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('teams', TeamController::class);
