<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Contato;


class Controller_Contato_Manutencao extends Controller
{
    
    public function visualizarContato(string $id) {
        $contato = Contato::findOrFail($id);

        return view('contatos.visualizarContato', compact('contato'));
    }
    public function mostraFormularioIncluir() {
        return view('contatos.incluirContato');
    }
    
    public function incluirContato(Request $request) {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20'
        ]);
        

        $contato = new Contato();
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->cidade = $request->input('cidade');
        $contato->estado = $request->input('estado');
        if ($contato->save()) {
            return  redirect()->route('contatos.incluirContato');
        }
    }
}
