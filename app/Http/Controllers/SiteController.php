<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class SiteController extends Controller
{
    //
    public function index(){
        return view("site.index");
    }

    public function vinhos(){
        return view("site.vinhos");
    }

    public function galeria(){
        return view("site.galeria");
    }

    public function cardapio(){
        return view("site.cardapio");
    }

    public function blog(){
        return view("site.blog");
    }

    public function sobre(){
        return view("site.sobre");
    }

    public function contato(){
        return view("site.contato");
    }

    public function noticia($slug){
        $noticia = Noticia::where("slug", $slug)->first();
        return view("site.noticia", ["noticia" => $noticia]);
    }
}
