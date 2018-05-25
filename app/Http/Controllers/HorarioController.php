<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Sala;
use App\Models\Sessao; 
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function IndexAdmin(){
        $horarios = Horario::all();
        $salas = Sala::all();
        return view('admin/admin')
            ->with('horarios', $horarios)
            ->with('salas', $salas);
    }

    public function Cria(Request $request){
        $horario = new Horario;
        $horario->hora = $request->hora;
        $horario->minuto = $request->minuto;
        $horario->save();
        return back();
    }

    public function Delete($id){
        $horario = Horario::find($id);
        $sessoes = Sessao::whereHas('horario', function($query) use ($horario){
            $query->where('idHorario', $horario->idHorario)
                  ->where('ativa',1);               
        })->get();
        if($horario == null){
            return back()
                ->with('message','Este horário não existe')
                ->with('type','error');
        }else if($sessoes->count() > 0){
            return back()
                ->with('message','Existem sessões cadastradas neste horário. Não é possível excluir!')
                ->with('type','error');
        }else{
            Horario::destroy($horario->idHorario);
            return back();
        }        
    }

    public function Altera(Request $request){
        $horario = Horario::find($request->idHorario);

        $horario->hora = $request->hora;
        $horario->minuto = $request->minuto;

        $horario->save();

        return back();
    }
}
