<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Lead;

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

    public function lead(Request $request){
        $lead = new Lead;
        $lead->email = $request->email;
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $estado = null;
        $cidade = null;
        $cep = null;
        $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
        if($query && $query["status"] == "success"){
            $estado = $query["region"];
            $cidade = $query["city"];
            $cep = $query["zip"];
        }
        $lead->ip = $ip;
        $lead->estado = $estado;
        $lead->cidade = $cidade;
        $lead->cep = $cep;
        $lead->save();
        toastr()->success("Newsletter assinada !");
        return redirect()->back();
    }
}
