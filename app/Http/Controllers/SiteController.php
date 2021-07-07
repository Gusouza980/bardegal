<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Lead;
use App\Models\Cardapio;
use App\Models\Galeria;
use App\Classes\Email;
use App\Classes\Recaptcha;

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
        $galeria = Galeria::where("ativo", true)->get();
        return view("site.galeria", ["galeria" => $galeria]);
    }

    public function cardapio(){
        $cardapio = Cardapio::first();
        return view("site.cardapio", ["cardapio" => $cardapio]);
    }

    public function eventos(){
        $confraternizacoes = Galeria::where([["categoria", 4], ["ativo", true]])->get();
        $eventos = Galeria::where([["categoria", 5], ["ativo", true]])->get();
        return view("site.eventos", [
            "confraternizacoes" => $confraternizacoes,
            "eventos" => $eventos
        ]);
    }

    public function reserva(){
        return view("site.reserva");
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

    public function email(Request $request){
        $response = null;
        $reCaptcha = new ReCaptcha();
        if(isset($_POST["g-recaptcha-response"])){
            $response = $reCaptcha->verifyResponse($_SERVER['REMOTE_ADDR'], $_POST["g-recaptcha-response"]);
        }

        // dd($response);
        if($response == null || !$response->success){
            return response()->json("captcha", 200);
        }

        $file = "Nome: " . $request->nome . "<br>";
        $file .= "Telefone: " . $request->telefone . "<br>";
        $file .= "Email: " . $request->email . "<br>";
        $file .= "Cidade: " . $request->cidade . "<br>";
        $file .= "Mensagem:<br> " . $request->mensagem . "<br>";
        $res = Email::enviar($file, "Novo registro", "", true);
        if($res){
            return response()->json("sucesso", 200);
        }else{
            return response()->json("erro", 200);
        }
    }
}
