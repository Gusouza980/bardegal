<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardapio;
use Illuminate\Support\Facades\Storage;

class CardapioController extends Controller
{
    //
    public function index(){
        $cardapio = Cardapio::first();
        return view("painel.cardapio.index", ["cardapio" => $cardapio]);
    }

    public function salvar(Request $request){
        $cardapio = Cardapio::first();
        
        if(!$cardapio){
            $cardapio = new Cardapio;
        }

        if($request->file("cardapio")){
            Storage::delete($cardapio->caminho);
            $cardapio->caminho = $request->file('cardapio')->store(
                'site/imagens/cardapio/', 'local'
            );
        }

        $cardapio->save();

        return redirect()->back();
    }
}
