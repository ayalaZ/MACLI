<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\UsersController;

Route::get('/', [RutasController::class, 'login'])->name('login')->middleware('guest');
Route::get('Registrarse',[RutasController::class,'registrarse'])->name('registrarse')->middleware('guest');

//usuarios
Route::post('addUser',[UsersController::class, 'add'])->name('addUser')->middleware('guest');
