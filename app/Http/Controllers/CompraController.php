<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Compra; 
use App\Models\Sessao; 

class CompraController extends Controller
{
    public function Cria(Request $request){
        $compra = new Compra;
        $compra->valorTotal = $request->input('valorTotal');
        $compra->idCliente = $request->input('idCliente');
        $compra->idSessao = $request->input('idSessao');
        $compra->save();
        $assentoCollection = collect($request->input('assentos'));        
        $compra->assentos()->attach($assentoCollection);
    }
}
