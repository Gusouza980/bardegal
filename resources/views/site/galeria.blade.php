@include('site.includes.head')
<body>
    @include('site.includes.fork')
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
                    <a class="nav-link" href="{{route('site.cardapio')}}">CARDÁPIO</a>
                </li>
                <li class="nav-item bg-branco-1 py-4 px-2">
                    <a class="nav-link" href="{{route('site.eventos')}}">EVENTOS</a>
                </li>
                <li class="nav-item bg-branco-1 py-4 px-2">
                    <a class="nav-link" href="{{route('site.reserva')}}">RESERVA</a>
                </li>
                <li class="nav-item bg-branco-1 py-4 px-2">
                    <a class="nav-link" href="{{route('site.galeria')}}">GALERIA</a>
                </li>
                <li class="nav-item bg-branco-1 py-4 px-2">
                    <a class="nav-link" href="{{route('site.blog')}}">BLOG</a>
                </li>

                <li class="nav-item bg-laranja-1 py-4 px-3">
                    <a class="nav-link" style="color: white !important;" href="{{route('site.contato')}}">CONTATO</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid py-5">
        <div class="row py-5">
            <div class="col-lg-3 d-none d-lg-block">
                <img class="galeria-section2-imagem-grande" src="{{asset('site/imagens/galeria-taca-grande.png')}}" alt="Taça vazia">
            </div>
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-12 border-left-laranja pl-3 galeria-section2-content text-center text-lg-left">
                        <h1>No Bardega Happy hour é assim</h1>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 mt-5 text-center text-lg-left">
                        <div class="row">
                            <div class="col-12 galeria-section2-content">
                                <h3>Ambiente Bardega</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 mt-5 text-center text-lg-left">
                        <div class="row">
                            <div class="col-12 galeria-section2-content">
                                <h3>Ambiente Bardega</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 mt-5 text-center text-lg-left">
                        <div class="row">
                            <div class="col-12 galeria-section2-content">
                                <h3>Ambiente Bardega</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 mt-5 text-center text-lg-left">
                        <div class="row">
                            <div class="col-12 galeria-section2-content">
                                <h3>Ambiente Bardega</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0 text-center galeria-section2-content">
                                <img src="{{asset('site/imagens/galeria-section2-exemplo.png')}}" alt="Exemplo galeria">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  <div class="container-fluid bg-preto-2 py-5">
        <div class="row px-5">
            <div class="col-12 border-left-laranja pl-3 galeria-section3-content">
                <h2>Fique por dentro<br>do mundo do vinho</h2>
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
    </div>  --}}

    @include('site.includes.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>

</body>

</html>