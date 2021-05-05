<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeria;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{
    //
    public function index(){
        $galeria = Galeria::all();
        return view("painel.galeria.index", ["galeria" => $galeria]);
    }

    public function adicionar(Request $request){
        $galeria = new Galeria;
        if($request->file("imagem")){
            $galeria->caminho = $request->file('imagem')->store(
                'site/imagens/galeria/' . Str::slug(config("globals.categorias_galeria")[$request->categoria]), 'local'
            );
        }
        $galeria->categoria = $request->categoria;
        $galeria->save();
        return redirect()->back();
    }

    public function remover(Galeria $galeria){
        Storage::delete($galeria->caminho);
        $galeria->delete();
        return redirect()->back();
    }

    public function exibicao(Galeria $galeria){
        if($galeria->ativo){
            $galeria->ativo = false;
        }else{
            $galeria->ativo = true;
        }
        $galeria->save();
        return redirect()->back();
    }
}
