<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use App\Models\Assento;
use App\Models\Horario;
use App\Models\Sessao; 
use Illuminate\Http\Request;

class SalaController extends Controller
{
    public function IndexAdmin(){
        $horarios = Horario::all();
        $salas = Sala::all();
        return view('admin/admin')
            ->with('horarios', $horarios)
            ->with('salas', $salas);
    }

    public function Cria(Request $request){        
        $sala = new Sala;
        $sala->tipo = $request->tipo;
        $sala->nome = $request->nome;
        $sala->save();
        $assentos = [];
        for($i=0;$i < 5;$i++){
            for($j=0;$j < 16;$j++){
                $assento = new Assento;
                $assento->linha = $i;
                $assento->coluna = $j;
                $assento->paraDeficiente = 0;
                $assentos[] = $assento;
            }
        }
        $sala->assentos()->saveMany($assentos);
        return back();
    }

    public function Delete($id){
        $sala = Sala::find($id);
        $sessoes = Sessao::whereHas('sala', function($query) use ($sala){
            $query->where('idSala', $sala->idSala)
                  ->where('ativa',1);               
        })->get();
        if($sala == null){
            return back()
                ->with('message','Esta sala não existe')
                ->with('type','error');
        }else if($sessoes->count() > 0){
            return back()
                ->with('message','Existem sessões cadastradas nesta sala. Não é possível excluir!')
                ->with('type','error');
        }else{
            $sala->delete();
            return back();
        } 
    }

    public function Altera(Request $request){
        $sala = Sala::find($request->idSala);

        $sala->tipo = $request->tipo;
        $sala->nome = $request->nome;

        $sala->save();

        return back();
    }
}
