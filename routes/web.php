<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaProtegidaController;
use App\Http\Controllers\ReservaNaturalController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\OperadorLocalController;


Route::redirect('/', '/login');

Route::resource('areaprotegida', AreaProtegidaController::class);
Route::resource('reservanatural', ReservaNaturalController::class);
Route::resource('especie', App\Http\Controllers\EspecieController::class);
Route::resource('operadorlocal', App\Http\Controllers\OperadorLocalController::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
