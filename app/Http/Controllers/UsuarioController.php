<?php

namespace App\Http\Controllers;

use App\Models\Usuario; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class UsuarioController extends Controller
{
    public function Index(Request $request)
    {
        $request->session()->put('backUrl',url()->previous());
        return view('login');
    }

    public function Autentica(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $url = $request->session()->get('backUrl');
        return $this->VerificaCredentials($credentials,$url);
    }

    public function Logout(Request $request)
    {
       Auth::logout();
       return redirect('/')
                ->with('message','Deslogado! Até mais!')
                ->with('type','success');
    }

    public function Cria(Request $request)
    {   
        $usuario = new Usuario;
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->tipo = 1;
        $url = $request->session()->get('backUrl');
        $naoExiste = Usuario::where('email','=', $usuario->email)->count() == 0;

        if($naoExiste){
            $usuario->save();
        }else{
            return back()
                ->with('message','Este e-mail já existe')
                ->with('type','error');
        }        

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        return $this->VerificaCredentials($credentials,$url);
    }

    private function VerificaCredentials($credentials,$url){
        if (Auth::attempt($credentials)) {
            return redirect($url)
                    ->with('message','Logado com sucesso!')
                    ->with('type','success');
        }else{
            return back()
                    ->with('message','Usuário ou senha incorretos')
                    ->with('type','error');
        }
    }
}
