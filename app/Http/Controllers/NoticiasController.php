<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NoticiasController extends Controller
{
    //

    public function consultar(){
        $noticias = Noticia::all();
        return view("painel.noticias.consultar", ["noticias" => $noticias]);
    }
    
    public function cadastro(){
        return view("painel.noticias.cadastro");
    }

    public function cadastrar(Request $request){
        $request->validate([
            'titulo' => 'unique:noticias,titulo',
        ]);

        $noticia = new Noticia;
        $noticia->usuario_id = session()->get("usuario")["id"];
        $noticia->titulo = $request->titulo;
        $noticia->subtitulo = $request->subtitulo;
        $noticia->conteudo = $request->conteudo;
        $noticia->slug = Str::slug($noticia->titulo);
        $noticia->categoria_id = $request->categoria_id;
        
        if($request->file("preview")){
            $noticia->preview = $request->file('preview')->store(
                'site/imagens/noticias/' . Str::slug($noticia->titulo), 'local'
            );
        }

        $noticia->save();

        foreach($request->tags as $tag){
            $noticia->tags()->attach($tag);
        }
        
        toastr()->success("Notícia salva com sucesso!");

        return redirect()->route("painel.noticias");

    }

    public function editar(Noticia $noticia){
        return view("painel.noticias.editar", ["noticia" => $noticia]);
    }

    public function salvar(Request $request, Noticia $noticia){
        $request->validate([
            'titulo' => 'unique:noticias,titulo,'.$noticia->id,
        ]);

        $noticia->titulo = $request->titulo;
        $noticia->subtitulo = $request->subtitulo;
        $noticia->conteudo = $request->conteudo;
        $noticia->slug = Str::slug($noticia->titulo);
        $noticia->categoria_id = $request->categoria_id;

        if($request->file("preview")){
            Storage::delete($noticia->preview);
            $noticia->preview = $request->file('preview')->store(
                'site/imagens/noticias/' . Str::slug($noticia->titulo), 'local'
            );
        }

        $noticia->save();
        $noticia->tags()->detach();
        foreach($request->tags as $tag){
            $noticia->tags()->attach($tag);
        }

        toastr()->success("Notícia salva com sucesso!");

        return redirect()->route("painel.noticias");
    }

    public function deletar(Noticia $noticia){
        Storage::disk('public')->delete($noticia->preview);
        $noticia->tags()->detach();
        $noticia->delete();
        toastr()->success("Notícia removida com sucesso!");

        return redirect()->route("painel.noticias");
    }
}
