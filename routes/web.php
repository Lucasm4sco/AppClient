<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

Auth::routes();

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cliente', [Controllers\ClienteController::class, 'index'])->name('cliente');

Route::get('/cliente/adicionar', [Controllers\ClienteController::class, 'adicionar'])->name('adicionar_cliente');

Route::post('/cliente/salvar', [Controllers\ClienteController::class, 'salvar'])->name('salvar_cliente');

Route::get('/cliente/editar/{id}', [Controllers\ClienteController::class, 'editar'])->name('editar_cliente');

Route::put('/cliente/atualizar/{id}', [Controllers\ClienteController::class, 'atualizar'])->name('atualizar_cliente');

Route::delete('/cliente/deletar/{id}', [Controllers\ClienteController::class, 'deletar'])->name('deletar_cliente');

Route::get('/cliente/detalhe/{id}', [Controllers\ClienteController::class, 'detalhe'])->name('detalhe_cliente');

Route::get('/telefone/adicionar/{id}', [Controllers\TelefoneController::class, 'adicionar'])->name('adicionar_telefone');

Route::post('/telefone/salvar/{id}', [Controllers\TelefoneController::class, 'salvar'])->name('salvar_telefone');

Route::get('/telefone/editar/{id}', [Controllers\TelefoneController::class, 'editar'])->name('editar_telefone');

Route::put('/telefone/atualizar/{id}', [Controllers\TelefoneController::class, 'atualizar'])->name('atualizar_telefone');

Route::delete('/telefone/deletar/{id}', [Controllers\TelefoneController::class, 'deletar'])->name('deletar_telefone');