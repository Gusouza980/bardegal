<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Image;

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

        libxml_use_internal_errors(true);

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

        $dom = new \DOMDocument();
        $dom->loadHTML(
            mb_convert_encoding($noticia->conteudo, 'HTML-ENTITIES', 'UTF-8'),
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
        );

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $count => $image) {
            $src = $image->getAttribute('src');

            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                if(!is_dir('site/imagens/noticias/' . Str::slug($noticia->titulo) . "/")){
                    mkdir('site/imagens/noticias/' . Str::slug($noticia->titulo) . "/");
                }
                $path = 'site/imagens/noticias/' . Str::slug($noticia->titulo) . "/" . uniqid('', true) . '.' . $mimeType;

                Image::make($src)
                    ->encode($mimeType, 80)
                    ->save(public_path($path));

                $image->removeAttribute('src');
                $image->setAttribute('src', asset($path));
            }
        }

        $noticia->conteudo = $dom->saveHTML();
        $noticia->publicada = true;
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
        libxml_use_internal_errors(true);
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

        $dom = new \DOMDocument();
        $dom->loadHTML(
            mb_convert_encoding($noticia->conteudo, 'HTML-ENTITIES', 'UTF-8'),
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
        );

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $count => $image) {
            $src = $image->getAttribute('src');

            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                if(!is_dir('site/imagens/noticias/' . Str::slug($noticia->titulo) . "/")){
                    mkdir('site/imagens/noticias/' . Str::slug($noticia->titulo) . "/");
                }
                $path = 'site/imagens/noticias/' . Str::slug($noticia->titulo) . "/" . uniqid('', true) . '.' . $mimeType;

                Image::make($src)
                    ->encode($mimeType, 80)
                    ->save(public_path($path));

                $image->removeAttribute('src');
                $image->setAttribute('src', asset($path));
            }
        }
        
        $noticia->publicada = true;
        $noticia->conteudo = $dom->saveHTML();

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
