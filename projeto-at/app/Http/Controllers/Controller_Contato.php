<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class Controller_Contato extends Controller
{
    public function index() {
        $contatos = Contato::all();

        return view ('contatos.contatos', compact('contatos'));
    }

}
