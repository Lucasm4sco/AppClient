<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;

Auth::routes();

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cliente', [Controllers\ClienteController::class, 'index'])->name('cliente');

Route::get('/cliente/adicionar', [Controllers\ClienteController::class, 'adicionar'])->name('adicionar_cliente');

Route::post('/cliente/salvar', [Controllers\ClienteController::class, 'salvar'])->name('salvar_cliente');

Route::get('/cliente/editar/{id}', [Controllers\ClienteController::class, 'editar'])->name('editar_cliente');

Route::put('/cliente/atualizar/{id}', [Controllers\ClienteController::class, 'atualizar'])->name('atualizar_cliente');

Route::delete('/cliente/deletar/{id}', [Controllers\ClienteController::class, 'deletar'])->name('deletar_cliente');