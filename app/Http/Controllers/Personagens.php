<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagem;

class Personagens extends Controller
{
    function view(){
        return view('cadastrar-personagem');        
    }
    
    function salvarPersonagem(Request $dados){
        $personagem = new Personagem();
        $personagem = dados->all();
        $personagem->save();

    }
    
    function listPersonagem(){
        return view('listra-personagem');        
    }
}
