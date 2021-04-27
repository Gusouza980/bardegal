<!doctype html>
<html lang="pt-br">

<head>
    <title>Bardega</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('site/css/main.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-preto-1">
        <a class="navbar-brand" href="#"><img src="{{asset('site/imagens/logo-branca.png')}}" alt="Logo Bardega"></a>
        <button class="navbar-toggler float-right" style="color:white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color:white;"><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item px-3 py-4 d-none d-xl-block">
                    <a class="nav-link" href="#"><i class="fab fa-facebook text-white fa-lg"></i></a>
                </li>
                <li class="nav-item px-3 py-4 d-none d-xl-block">
                    <a class="nav-link" href="#"><i class="fab fa-instagram text-white fa-lg"></i></a>
                </li>
                <li class="nav-item px-3 py-4 d-none d-xl-block">
                    <a class="nav-link" href="#"><i class="fab fa-twitter text-white fa-lg"></i></a>
                </li>
                <li class="nav-item px-3 py-4 d-none d-xl-block">
                    <a class="nav-link" href="#"><i class="fab fa-whatsapp text-white fa-lg"></i></a>
                </li>
                <li class="nav-item bg-branco-1 py-4 px-2">
                    <a class="nav-link" href="{{route('site.index')}}">HOME</a>
                </li>
                <li class="nav-item bg-branco-1 py-4 px-2">
                    <a class="nav-link" href="{{route('site.sobre')}}">BERDEGA</a>
                </li>
                <li class="nav-item bg-branco-1 py-4 px-2">
                    <a class="nav-link" href="{{route('site.vinhos')}}">VINHOS</a>
                </li>
                <li class="nav-item bg-branco-1 py-4 px-2">
                    <a class="nav-link" href="{{route('site.cardapio')}}">CARDÁPIO</a>
                </li>
                <li class="nav-item bg-branco-1 py-4 px-2">
                    <a class="nav-link" href="{{route('site.blog')}}">BLOG</a>
                </li>
                <li class="nav-item bg-branco-1 py-4 px-2">
                    <a class="nav-link" href="{{route('site.galeria')}}">GALERIA</a>
                </li>
                <li class="nav-item bg-laranja-1 py-4 px-3">
                    <a class="nav-link" style="color: white !important;" href="{{route('site.contato')}}">CONTATO</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid bg-preto-1 py-5">
        <div class="row px-5">
            <div class="col-12 border-left-laranja pl-3 galeria-section3-content">
                <h2>Blog</h2>
            </div>
        </div>
        <div class="row px-5 py-5">
            <div class="col-lg-4 d-none d-lg-block galeria-section3-imagem-grande">
                <img src="{{asset('site/imagens/blog-1.png')}}" alt="Sherry Week">
            </div>
            <div class="col-12 col-lg-3 text-center text-lg-left mt-0 mt-lg-5">
                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col-12" id="home-section4-box3-title">
                            Ultimos dias dos pratos da Sherry Week
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12" id="home-section4-box3-calendar">
                            <i class="far fa-calendar fa-sm"></i> 01.01.2021
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12" id="home-section4-box3-text">
                            Os pratos feitos especialmente para a Sherry Week estão fazendo sucesso no Bardega.
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-start" id="home-section4-box3-link">
                            Veja mais <i class="fas fa-plus fa-sm"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 text-center text-lg-left mt-5 mt-lg-0">
                <div class="container-fluid ml-0 ml-lg-n3">
                    <div class="row">
                        <div class="col-12">
                            <img class="home-section4-card-imagem" src="{{asset('site/imagens/blog-2.png')}}" alt="Sherry Week 2">
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4 ml-0 ml-lg-n3">
                    <div class="row">
                        <div class="col-12" id="home-section4-box3-title">
                            Ultimos dias dos pratos da Sherry Week
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12" id="home-section4-box3-calendar">
                            <i class="far fa-calendar fa-sm"></i> 01.01.2021
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12" id="home-section4-box3-text">
                            Os pratos feitos especialmente para a Sherry Week estão fazendo sucesso no Bardega.
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-start" id="home-section4-box3-link">
                            Veja mais <i class="fas fa-plus fa-sm"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 text-center text-lg-left mt-5 mt-lg-0">
                <div class="container-fluid ml-0 ml-lg-n3">
                    <div class="row">
                        <div class="col-12">
                            <img class="home-section4-card-imagem" src="{{asset('site/imagens/blog-2.png')}}" alt="Sherry Week 2">
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4 ml-0 ml-lg-n3">
                    <div class="row">
                        <div class="col-12" id="home-section4-box3-title">
                            Ultimos dias dos pratos da Sherry Week
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12" id="home-section4-box3-calendar">
                            <i class="far fa-calendar fa-sm"></i> 01.01.2021
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12" id="home-section4-box3-text">
                            Os pratos feitos especialmente para a Sherry Week estão fazendo sucesso no Bardega.
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-start" id="home-section4-box3-link">
                            Veja mais <i class="fas fa-plus fa-sm"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 px-5">
        <div class="row">
            @foreach(\App\Models\Noticia::where("publicada", true)->get() as $noticia)
            <div class="col-12 col-lg-3 col-xl-2 text-center text-lg-left col-md-4 col-sm-6 mt-5">
                <div class="container-fluid ml-0 ml-lg-n3">
                    <div class="row">
                        <div class="col-12 blog-noticias-box-img">
                            <img class="home-section4-card-imagem" src="{{asset($noticia->preview)}}" alt="{{$noticia->titulo}}">
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4 ml-0 ml-lg-n3">
                    <div class="row">
                        <div class="col-12 blog-noticias-box-title">
                            {{$noticia->titulo}}
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 blog-noticias-box-calendar">
                            <i class="far fa-calendar fa-sm"></i> {{date("d/m/Y", strtotime($noticia->created_at))}}
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 blog-noticias-box-text">
                            {{$noticia->subtitulo}}
                        </div>
                    </div>
                    <div class="row mt-4">
                        <a href="{{route('site.noticia', ['slug' => $noticia->slug])}}">
                            <div class="col-12 text-start blog-noticias-box-link">
                                Veja mais <i class="fas fa-plus fa-sm"></i>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
 
        </div>

    </div>

    <div class="container-fluid bg-branco-1">
        <div class="row">
            <div class="col-12 col-lg-5 pt-5">
                <div class="row pt-0 pt-lg-5 h-100">
                    <div class="col-12 col-lg-6 d-none d-lg-block" id="footer-1">

                    </div>
                    <div class="col-12 col-lg-6 mt-0 mt-lg-5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 px-0 text-center text-lg-left">
                                    <img src="{{asset('site/imagens/footer-2.png')}}" id="footer-logo" alt="Logo footer">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center text-lg-left">
                                    <button id="footer-button-1">Reservar Mesa</button>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12 text-center text-lg-left pb-5 pb-lg-0" id="footer-text-1">
                                    (11) 2691 7578<br>
                                    (11) 26917579<br><br>
                                    reservas@bardega.com.br<br>
                                    contato@bardega.com.br<br><br>
                                    Rua Dr. Alceu de Campos Rodrigues, 218 Itaim Bibi - São Paulo, SP -
                                    04544-000<br><br>
                                    Terça a Sábado Das 16h às 22h
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7 bg-preto-1 pt-5">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="container-fluid pl-5">
                            <div class="row">
                                <div class="col-12 text-center text-lg-left footer-newsletter-text">
                                    <h5>Newsletter</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 footer-newsletter-text text-center text-lg-left">
                                    <span>Junte-se à nossa lista de discussão e<br>mantenha-se atualizado com a
                                        Bardega</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center text-lg-left" id="footer-newsletter-input">
                                    <input type="text" name="email" placeholder=" Informe seu e-mail">
                                    <button class="ml-n1">Enviar</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 footer-newsletter-text text-center text-lg-left">
                                    <span>Ao enviar seu e-mail, você aceita a política de privacidade.</span>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12">
                                    <div class="text-white text-center text-lg-left" id="footer-links">
                                        <ul class="px-0" style="list-style: none;">
                                            <li><i class="fas fa-chevron-right"></i>&nbsp;&nbsp; Home</li>
                                            <li><i class="fas fa-chevron-right mt-4"></i>&nbsp;&nbsp; Sobre o Bardega
                                            </li>
                                            <li><i class="fas fa-chevron-right mt-4"></i>&nbsp;&nbsp; Vinhos</li>
                                            <li><i class="fas fa-chevron-right mt-4"></i>&nbsp;&nbsp; Cardápio</li>
                                            <li><i class="fas fa-chevron-right mt-4"></i>&nbsp;&nbsp; Blog</li>
                                            <li><i class="fas fa-chevron-right mt-4"></i>&nbsp;&nbsp; Galeria</li>
                                            <li><i class="fas fa-chevron-right mt-4"></i>&nbsp;&nbsp; Contato</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 mt-5">
                        <div class="container-fluid pt-4">
                            <div class="row">
                                <div class="col-12 col-lg-7 offset-lg-4 text-center footer-advisor-text">
                                    <h5>TripAdvisor</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-7 offset-lg-4 text-center footer-advisor-text">
                                    <img src="{{asset('site/imagens/advisor.png')}}" id="footer-image-advisor" alt="Advisor">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-lg-4 text-center text-lg-left footer-advisor-text">
                                    <img src="{{asset('site/imagens/advisor-2.png')}}" id="footer-image-advisor2" alt="Advisor 2">
                                </div>
                                <div class="col-12 col-lg-8 text-center text-lg-left footer-advisor-text">
                                    <span>Curta nossas redes sociais e fique por dentro de tudo o que acontece. </span>
                                    <p class="mt-3">
                                        <i class="fab fa-facebook text-white fa-lg"></i>
                                        <i class="fab fa-instagram text-white fa-lg ml-3"></i>
                                        <i class="fab fa-twitter text-white fa-lg ml-3"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div id="footer-direitos"
                        class="text-center text-sm-left col-12 col-sm-6 footer-direitos-text pl-0 pl-sm-5">
                        Todos os direitos reservados
                    </div>
                    <div id="footer-copy"
                        class="text-center text-sm-right col-12 col-sm-6 footer-copy-text text-right pr-0 pr-sm-5">
                        DESENVOLVIDO POR <img src="{{asset('site/imagens/footer-seven.png')}}" alt="Logo 7seven">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
        crossorigin="anonymous"></script>
</body>

</html>