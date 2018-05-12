<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use App\Models\Horario;
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
        return back();
    }

    public function Delete($id){
        $sala = Sala::find($id);
        if($sala == null){
            return back()
                ->with('message','Esta sala não existe')
                ->with('type','error');
        }else{
            Sala::destroy($sala->idSala);
            return back();
        }        
    }
}
