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
        $filmes = Filme::whereHas('sessoes',function($query){
                            $query->where('ativa',1);
                        })->get();
        return view('listaSessoes')->with('filmes', $filmes);
    }

    public function IndexDestaque(){
        $filmes = Filme::whereHas('sessoes',function($query){
                            $query->where('ativa',1);
                        })
                        ->where('destaque', 1)
                        ->get();
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
        $sessoes = Sessao::where('idSala', $sala->idSala)
                           ->where('idHorario', $horario->idHorario)
                           ->where('data', $request->data)
                           ->where('ativa',1)
                           ->get();

        if($sessoes->count() > 0){
            return back()
                ->with('message','Já existe uma sessão cadastrada neste horário e sala')
                ->with('type','error');
        }

        $sessao->data = $request->data;
        $sessao->valorAssento = $request->valorAssento;
        $sessao->idFilme = $filme->idFilme;
        $sessao->idHorario = $horario->idHorario;
        $sessao->idSala = $sala->idSala;
        $sessao->save();        
        $sessao->assentos()->saveMany($sala->assentos()->get());
        
        return redirect()->route('home');
    }

    public function Inativa($id){
        $sessao = Sessao::find($id);
        $sessao->ativa = 0;
        $sessao->save();
        return back();
    }

    public function Assentos(Request $request){
        $sessao = Sessao::find($request->id);
        return response()->json($sessao->assentos);
    }
}
