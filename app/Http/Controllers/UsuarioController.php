<?php

namespace App\Http\Controllers;

use App\Models\Usuario; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function Index()
    {
        $usuario = new Usuario;

        return view('login');
    }

    public function Autentica(Request $request)
    {
        $credentials = $request->only('email', 'password');

        return $this->VerificaCredentials($credentials);
    }

    public function Logout(Request $request)
    {
       Auth::logout();
       return redirect('/');
    }

    public function Cria(Request $request)
    {   
        $usuario = new Usuario;
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->tipo = 1;

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

        return $this->VerificaCredentials($credentials);
    }

    private function VerificaCredentials($credentials){
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                ->with('message','Logado com sucesso!')
                ->with('type','success');
        }else{
            return back()
                ->with('message','Usuário ou senha incorretos')
                ->with('type','error');
        }
    }
}
