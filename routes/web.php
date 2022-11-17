<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;

Auth::routes();

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cliente', [Controllers\ClienteController::class, 'index'])->name('cliente');
