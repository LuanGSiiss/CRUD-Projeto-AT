<?php

use App\Http\Controllers\Controller_Contato;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Contatos', [Controller_Contato::class, 'index'])->name('contatos.contatos');

Route::get('/Contatos/Inserir', [Controller_Incluir_Contato::class, 'mostraFormulario'])->name('contatos.incluirContato');
Route::post('/Contatos/Inserir', [Controller_Incluir_Contato::class, 'Incluir'])->name('contatos.incluirContato');

