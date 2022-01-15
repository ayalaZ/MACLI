<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutasController;


Route::get('/', [RutasController::class, 'login'])->name('login')->middleware('guest');
Route::get('Registrarse',[RutasController::class,'registrarse'])->name('registrarse')->middleware('guest');
