<?php

use App\Http\Controllers\Controller_Contato;
use App\Http\Controllers\Controller_Contato_Manutencao;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Contatos', [Controller_Contato::class, 'index'])->name('contatos.consultaContatos');

Route::get('/Contatos/Visualizar/{id}', [Controller_Contato_Manutencao::class, 'visualizarContato']);

Route::get('/Contatos/Incluir', [Controller_Contato_Manutencao::class, 'mostraFormularioIncluir'])->name('contatos.incluirContato');
Route::post('/Contatos/Incluir', [Controller_Contato_Manutencao::class, 'incluirContato']);

Route::get('/Contatos/Manutencao', [Controller_Contato_Manutencao::class, 'mostraFormularioAlterar'])->name('contatos.alterarContato');
Route::post('/Contatos/Manutencao', [Controller_Contato_Manutencao::class, 'alterarConatato']);
Route::delete('/Contatos/Manutencao', [Controller_Contato_Manutencao::class, 'deletarContato']);




