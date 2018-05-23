<?php

namespace App\Http\Controllers;

use App\Models\Filme; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class FilmeController extends Controller
{
    public function IndexAdmin(){
        $filmes = Filme::all();
        return view('admin/listaFilmes')
            ->with('filmes',$filmes);
    }

    public function Filtro(Request $request){
        $filmes = Filme::where('nome', 'LIKE', "%$request->busca%")->get();
        return view('admin/listaFilmes')
            ->with('filmes',$filmes);
    }

    public function Novo(){
        $filme = new Filme;
        return view('admin/criaFilme')
            ->with('filme', $filme);
    }

    public function Cria(Request $request){        
        $filme = new Filme;
        $filme->cartazImgPath = Storage::putFile('filmeimgs', new File($request->file('cartazImgPath')));
        $filme->headerImgPath = Storage::putFile('filmeimgs', new File($request->file('headerImgPath')));
        $filme->fill($request->all());
        $filme->save();
        return redirect()->route('indexFilmeAdmin');
    }

    public function Edita($id){
        $filme = Filme::find($id);
        return view('admin/editaFilme')
            ->with('filme', $filme);
    }

    public function Deleta($id){
        Filme::destroy($id);        
        return redirect()->route('indexFilmeAdmin');
    }

    public function Altera(Request $request){
        $filme = Filme::find($request->idFilme);
        $filme->fill($request->all());
        if($request->hasFile('cartazImgPath')){
            Storage::delete($filme->cartazImgPath);
            $filme->cartazImgPath = Storage::putFile('filmeimgs', new File($request->file('cartazImgPath')));
        }
        if($request->hasFile('headerImgPath')){
            Storage::delete($filme->headerImgPath);
            $filme->headerImgPath = Storage::putFile('filmeimgs', new File($request->file('headerImgPath')));
        }

        $filme->save();

        return redirect()->route('detalheFilme', ['id' => $filme->idFilme]);
    }

    public function Detalhes($id){
        $filme = Filme::find($id);
        $sessoes = $filme->sessoes()->get();
        $sessoesPorDia = $sessoes->groupBy('data');       
        return view('filmedetalhe')
            ->with('filme',$filme)
            ->with('sessoes',$sessoesPorDia);
    }    
}