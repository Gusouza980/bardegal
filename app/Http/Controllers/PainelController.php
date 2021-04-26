<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class PainelController extends Controller
{

    public function index(){
        return view("painel.index");
    }

    public function login(){
        return view("painel.login");
    }

    public function logar(Request $request){
        $usuario = Usuario::where("usuario", $request->usuario)->first();
        
        if($usuario){
            if(Hash::check($request->senha, $usuario->senha)){
                session()->put(["usuario" => $usuario->toArray()]);
                return redirect()->route("painel.index");
            }else{
                toastr()->error("Informações de usuário incorretas!");
            }
        }else{
            toastr()->error("Informações de usuário incorretas!");
        }

        return redirect()->back();
    }

    public function sair(){
        session()->forget("usuario");
        return redirect()->route("painel.login");
    }
}
