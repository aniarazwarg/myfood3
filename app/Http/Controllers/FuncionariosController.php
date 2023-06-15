<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function mostrar(){
        return "Mostrar funcionários!";
    }

    public function adicionarAtualizar(){
        return view('adicionar');
    }

    public function detalhes(){
        return view('detalhes');
    }
}
