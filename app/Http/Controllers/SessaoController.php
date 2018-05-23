<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sessao; 
use App\Models\Filme; 
use App\Models\Sala; 
use App\Models\Horario; 

class SessaoController extends Controller
{
    public function Index(){
        $filmes = Filme::has('sessoes')->get();
        return view('listaSessoes')->with('filmes', $filmes);
    }

    public function IndexDestaque(){
        $filmes = Filme::has('sessoes')->where('destaque', 1)->get();
        return view('index')->with('filmes', $filmes);
    }

    public function Novo(){
        $sessao = new Sessao;
        $salas = Sala::all()->pluck('nome','idSala');
        $filmes = Filme::all()->pluck('nome','idFilme');
        $horarios = Horario::all()->pluck('horarioformatado','idHorario');
        return view('admin/criaSessao')
            ->with('sessao', $sessao)
            ->with('salas', $salas)
            ->with('filmes', $filmes)
            ->with('horarios', $horarios);
    }

    public function Cria(Request $request){        
        $sessao = new Sessao;
        $filme = Filme::find($request->idFilme);
        $sala = Sala::find($request->idSala);
        $horario = Horario::find($request->idHorario);
        $sessao->data = $request->data;
        $sessao->valorAssento = $request->valorAssento;
        $sessao->idFilme = $filme->idFilme;
        $sessao->idHorario = $horario->idHorario;
        $sessao->idSala = $sala->idSala;
        $sessao->save();
        
        return redirect()->route('home');
    }
}
