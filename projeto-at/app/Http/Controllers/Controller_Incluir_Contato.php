<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class Controller_Incluir_Contato extends Controller
{
    public function mostraFormulario() {
        return view('contatos.incluirContato');
    }
    
    public function Inserir(Resquest $request) {
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
            return  redirect()->route('contatos.php')->with('success', 'Contato inserido com sucesso!');
        }
    }
}
