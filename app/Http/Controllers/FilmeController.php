<?php

namespace App\Http\Controllers;

use App\Models\Filme; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilmeController extends Controller
{
    public function Index(){

    }

    public function IndexAdmin(){
        $filme = new Filme;
        $filmes = Filme::all();
        return view('admin/criaFilme')
            ->with('filme',$filme)
            ->with('filmes', $filmes);
    }

    public function Cria(Request $request){        
        $filme = new Filme;
        $filme->nome = $request->nome;
        $filme->nomeOriginal = $request->nomeOriginal;
        $filme->anoLancamento = $request->anoLancamento;
        $filme->diretor = $request->diretor;
        $filme->sinopse = $request->sinopse;
        $filme->tipo = $request->tipo;
        $filme->classificacao = $request->classificacao;
        $filme->duracaoMinutos = $request->duracaoMinutos;
        $filme->imgPath = $request->imgPath;
        $filme->save();
        return back();
    }
}