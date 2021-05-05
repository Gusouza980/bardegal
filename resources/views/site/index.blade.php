@include('site.includes.head')
<body>
    @include('site.includes.fork')
    <div class="container-fluid"  id="nav-mobile-container">

        <nav class="navbar navbar-expand-lg navbar-light d-block d-lg-none">
            <button class="navbar-toggler float-right" style="color:white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color:white;"><i class="fas fa-bars"></i></span>
            </button>
    
            <div class="collapse navbar-collapse" style="background-color: black; color: white !important;" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto bg-branco text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('site.index')}}"><span class="span-link link-active">HOME</span> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.sobre')}}"><span class="span-link">BARDEGA</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.vinhos')}}"><span class="span-link">VINHOS</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.cardapio')}}"><span class="span-link">CARDÁPIO</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.blog')}}"><span class="span-link">BLOG</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.galeria')}}"><span class="span-link">GALERIA</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.contato')}}"><span class="span-link">CONTATO</span></a>
                    </li>
                </ul>
            </div>
        </nav>
 
    </div>
    <div class="container-fluid" style="background: url({{asset('site/imagens/background-home-1.png')}}); background-size: cover; background-position: center;">      
        <div class="row justify-content-start align-items-center" style=" min-height: 100vh;">
            <div class="offset-lg-2 offset-md-2 col-lg-4 col-md-8" style="background-color: black; color:white;">
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="" width="15" src="{{asset('site/imagens/retangulo-laranja.png')}}" alt="Retângulo laranja">
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-11 px-5 text-center" id="home-section1-box-title">
                        <h6>BARDEGA</h6>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-11 px-5 text-center" id="home-section1-box-text">
                        “O PRIMEIRO, E MAIS PREMIADO BAR DE VÍNHOS DO BRASIL”
                    </div>
                </div>

                <div class="row justify-content-center pt-3">
                    <div class="col-11 px-2 text-center" id="home-section1-box-subtext">
                        pela Revista<br> Veja Comer e Beber.
                    </div>
                </div>

                <div class="row justify-content-center pt-3">
                    <div class="col-12 text-center">
                        <button id="home-section1-box-botao">SAIBA MAIS</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-md-block" style="display: block; position: absolute; top: 25px; left: 25px;">
            <img class="w-100" src="{{asset('site/imagens/logo-branca.png')}}" alt="Logo Bardega">
        </div>  
        {{--  <div class="d-none d-md-block" style="display: block; position: absolute; top: calc(50% - 50px); left: 0px; border-top-right-radius: 15px; border-bottom-right-radius: 15px;">
            <img class="w-100" src="{{asset('site/imagens/botao-reserva-mesa.png')}}" alt="Reservar mesa">
        </div>  --}}

        <div id="container-nav" class="d-none d-lg-block nav-bottom">
            <ul id="home-section1-nav">
                <li class="home-section1-nav-item px-4 pt-4 pb-3">
                    <a href="{{route('site.index')}}">HOME</a>
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3">
                    <a href="{{route('site.sobre')}}">BARDEGA</a>
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3">
                    <a href="{{route('site.vinhos')}}">VINHOS</a>
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3">
                    <a href="{{route('site.cardapio')}}">CARDÁPIO</a>
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3">
                    <a href="{{route('site.blog')}}">BLOG</a>
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3">
                    <a href="{{route('site.galeria')}}">GALERIA</a>
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3 bg-laranja-1 text-white">
                    <a href="{{route('site.contato')}}">CONTATO</a>
                </li>
            </ul>
        </div>

        <div class="d-none d-md-block" id="home-section1-nav-lateral" style="display: block; position: absolute; top: 0px; right: 0px; width: 80px;">
            <div class="container-fluid px-0 py-0">
                <div class="row mx-0">
                    <div class="col-12 px-0">
                        <div class="row mt-5 mx-0">
                            <div class="col-12 py-3 px-0 text-center">
                                <i class="fab fa-instagram fa-lg text-white"></i>
                            </div>
                        </div>
                        <div class="row mx-0">
                            <div class="col-12 py-3 px-0 text-center">
                                <i class="fab fa-twitter fa-lg text-white"></i>
                            </div>
                        </div>
                        <div class="row mx-0">
                            <div class="col-12 py-3 px-0 text-center">
                                <i class="fab fa-whatsapp fa-lg text-white"></i>
                            </div>
                        </div>
                        <div class="row pb-5 mx-0">
                            <div class="col-12 py-3 px-0 text-center">
                                <i class="fab fa-facebook fa-lg text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION 2 -->
    <div class="container-fluid bg-preto-1 d-block d-lg-none py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-10">
                <div class="bg-preto-1 text-white">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="" width="15" src="{{asset('site/imagens/retangulo-laranja.png')}}" alt="Retângulo laranja">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <div class="col-11 px-5 text-center home-section2-box1-title" id="">
                            <h6>BARDEGA</h6>
                        </div>
                    </div>
                    <div class="row justify-content-center pt-3">
                        <div class="col-11 px-5 text-center home-section2-box1-text" id="">
                            110 rótulos selecionados para você!
                        </div>
                    </div>
                    <div class="row justify-content-center pt-3">
                        <div class="col-8 text-left home-section2-box1-subtext" id="">
                            São 110 vinhos do mundo todo para você degustar em taças de 120ml, 60ml ou 30ml.
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-12 text-center">
                            <button class="home-section2-box1-botao" id="">SAIBA MAIS</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-8">
                <iframe class="home-section2-video" src="https://www.youtube.com/embed/va6fODhfhyM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div>
        </div>
    </div>
    <div class="container-fluid bg-preto-1 d-none d-lg-block">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-lg-5 text-center">
                <div id="home-section2-box1" class="bg-preto-1 text-white">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="" width="15" src="{{asset('site/imagens/retangulo-laranja.png')}}" alt="Retângulo laranja">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <div class="col-11 px-5 text-center home-section2-box1-title">
                            <h6>BARDEGA</h6>
                        </div>
                    </div>
                    <div class="row justify-content-center pt-3">
                        <div class="col-11 px-5 text-center home-section2-box1-text">
                            110 rótulos selecionados para você!
                        </div>
                    </div>
                    <div class="row justify-content-center pt-3">
                        <div class="col-8 text-left home-section2-box1-subtext">
                            São 110 vinhos do mundo todo para você degustar em taças de 120ml, 60ml ou 30ml.
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-12 text-center">
                            <button class="home-section2-box1-botao">SAIBA MAIS</button>
                        </div>
                    </div>

                </div>
                <iframe class="home-section2-video" src="https://www.youtube.com/embed/va6fODhfhyM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            
            </div>
        </div>
    </div>

    <div class="container-fluid d-block d-lg-none py-5">
        <div class="row d-flex justify-content-center">
            <div class="mt-4 col-12 col-md-6 home-section3-box-imagem">
                <img src="{{asset('site/imagens/cardapio-1.png')}}" alt="Cardápio 1">
            </div>
            <div class="mt-4 col-12 col-md-6 home-section3-box-imagem">
                <img src="{{asset('site/imagens/cardapio-2.png')}}" alt="Cardápio 2">
            </div>
            <div class="col-12 py-5 px-5 home-section3-text1 text-center">
                <span>
                    Nosso cardápio apresenta acompanhamentos especialmente criados para harmonizar com nossos memoráveis vinhos.
                </span>
            </div>
            <div class="mt-4 col-12 col-md-6 home-section3-box-imagem">
                <img src="{{asset('site/imagens/cardapio-3.png')}}" alt="Cardápio 3">
            </div>
            <div class="mt-4 col-12 col-md-6 home-section3-box-imagem">
                <img src="{{asset('site/imagens/cardapio-4.png')}}" alt="Cardápio 4">
            </div>
            <div class="mt-4 col-12 py-5 px-5 home-section3-text2 text-center">
                <span>
                    Nossos pratos são desenvolvidos com ingredientes selecionados. Buscamos sempre o melhor para estar à altura de nossos vinhos!                    
                </span>
                <br>
                <button class="mt-4">Saiba Mais</button>
            </div>
            <div class="mt-4 col-12 col-sm-6 col-md-4 px-4 home-section3-text3 text-center">
                <div class="pl-2 mb-4 home-section3-text3-title">
                    COMO FUNCIONA O BARDEGA:
                </div>
                <span>
                    aqui entrarão fotos do passo a passo de como degustar na máquina.
                </span>
            </div>
            <div class="px-0 mt-4 mt-sm-0 col-12 col-sm-6 col-md-4 home-section3-box-imagem text-center">
                <img src="{{asset('site/imagens/cardapio-6.png')}}" style="max-width: 328px;" alt="Cardápio 6">
            </div>
            <div class="px-0 mt-4 mt-sm-0 col-12 col-sm-6 col-md-4 home-section3-box-imagem text-center">
                <img src="{{asset('site/imagens/cardapio-7.png')}}" style="max-width: 328px;" alt="Cardápio 7">
            </div>
            <div class="px-0 mt-4 mt-sm-0 col-12 col-sm-6 col-md-4 home-section3-box-imagem text-center">
                <img src="{{asset('site/imagens/cardapio-8.png')}}" style="max-width: 328px;" alt="Cardápio 8">
            </div>
            <div class="col-12 col-md-8 py-5 px-5 home-section3-text4 text-center">
                <div class="home-section3-text4-content py-4">
                    <h5>
                        Vinhos - Enomatics e champanheria                    
                    </h5>
                    <span>São 110 rótulos do mundo todo - desde os clássicos do Velho Mundo até grandes novidades de países como EUA, Nova Zelândia e até Líbano. Tudo disponível em taças, seja nas 12 máquinas Enomatic, que oferecem 96 rótulos, ou na champanheria, onde espumantes do mundo todo completam nossas carta.</span>
                </div>
                <div class="px-2 py-3 home-section3-text4-link">
                    Veja mais <i class="fas fa-plus fa-sm"></i>
                </div>
            </div>
            <div class="px-0 mt-4 mt-sm-0 col-12 col-sm-6 col-md-4 home-section3-box-imagem text-center">
                <img src="{{asset('site/imagens/cardapio-9.png')}}" style="max-width: 328px;" alt="Cardápio 9">
            </div>
            <div class="px-0 mt-4 mt-sm-0 col-12 col-sm-6 col-md-4 home-section3-box-imagem text-center">
                <img src="{{asset('site/imagens/cardapio-10.png')}}" style="max-width: 328px;" alt="Cardápio 10">
            </div>
        </div>
    </div>

    <div class="d-none d-lg-block" id="home-section3">
        <div class="container-fluid">
            <div id="home-section3-grid">
                <div class="home-section3-box-imagem" id="home-section3-cardapio1">
                    <img src="{{asset('site/imagens/cardapio-1.png')}}" alt="Cardápio 1">
                </div>
                <div class="home-section3-box-imagem" id="home-section3-cardapio2">
                    <img src="{{asset('site/imagens/cardapio-2.png')}}" alt="Cardápio 2">
                </div>
                <div class="my-5 py-5 px-5 home-section3-text1">
                    <span>
                        Nosso cardápio apresenta acompanhamentos especialmente criados para harmonizar com nossos memoráveis vinhos.
                    </span>
                </div>
                <div class="home-section3-box-imagem" id="home-section3-cardapio3">
                    <img src="{{asset('site/imagens/cardapio-3.png')}}" alt="Cardápio 3">
                </div>
                <div class="home-section3-box-imagem" id="home-section3-cardapio4">
                    <img src="{{asset('site/imagens/cardapio-4.png')}}" alt="Cardápio 4">
                </div>
                <div class="home-section3-box-imagem" id="home-section3-cardapio5">
                    <img src="{{asset('site/imagens/cardapio-5.png')}}" alt="Cardápio 5">
                </div>
                <div class="my-5 py-5 px-5 home-section3-text2">
                    <span>
                        Nossos pratos são desenvolvidos com ingredientes selecionados. Buscamos sempre o melhor para estar à altura de nossos vinhos!                    
                    </span>
                    <button class="mt-4">Saiba Mais</button>
                </div>
                <div class="px-4 home-section3-text3">
                    <div class="pl-2 mb-4 home-section3-text3-title">
                        COMO FUNCIONA O BARDEGA:
                    </div>
                    <span>
                        aqui entrarão fotos do passo a passo de como degustar na máquina.
                    </span>
                </div>
                <div class="home-section3-box-imagem" id="home-section3-cardapio6">
                    <img src="{{asset('site/imagens/cardapio-6.png')}}" alt="Cardápio 6">
                </div>
                <div class="home-section3-box-imagem" id="home-section3-cardapio7">
                    <img src="{{asset('site/imagens/cardapio-7.png')}}" alt="Cardápio 7">
                </div>
                <div class="home-section3-box-imagem" id="home-section3-cardapio8">
                    <img src="{{asset('site/imagens/cardapio-8.png')}}" alt="Cardápio 8">
                </div>
                <div class="home-section3-box-imagem" id="home-section3-cardapio9">
                    <img src="{{asset('site/imagens/cardapio-9.png')}}" alt="Cardápio 9">
                </div>
                <div class="home-section3-box-imagem" id="home-section3-cardapio10">
                    <img src="{{asset('site/imagens/cardapio-10.png')}}" alt="Cardápio 10">
                </div>

                <div class="py-5 px-5 home-section3-text4">
                    <div class="mt-5 home-section3-text4-content">
                        <h5>
                            Vinhos - Enomatics e champanheria                    
                        </h5>
                        <span>São 110 rótulos do mundo todo - desde os clássicos do Velho Mundo até grandes novidades de países como EUA, Nova Zelândia e até Líbano. Tudo disponível em taças, seja nas 12 máquinas Enomatic, que oferecem 96 rótulos, ou na champanheria, onde espumantes do mundo todo completam nossas carta.</span>
                    </div>
                    <div class="px-2 py-3 home-section3-text4-link">
                        Veja mais <i class="fas fa-plus fa-sm"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 bg-preto-2 px-5">
        <div class="row d-flex justify-content-center">
            <div class="offset-xl-1 col-lg-6 col-xl-2 px-2" id="home-section4-column1">
                <div class="container-fluid bg-preto-1 px-0" id="home-section4-box1">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="" width="15" src="{{asset('site/imagens/retangulo-laranja.png')}}" alt="Retângulo laranja">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <div class="col-12 px-5 text-center" id="home-section4-box1-title">
                            <h6>NEW</h6>
                        </div>
                    </div>
                    <div class="row justify-content-center pt-3">
                        <div class="col-12 px-5 text-center text-white" id="home-section4-box1-text">
                            Blog Bardega
                        </div>
                    </div>
    
                    <div class="row justify-content-center pt-3">
                        <div class="col-12 px-2 text-left px-5 text-white" id="home-section4-box1-subtext">
                            Fique por dentro de tudo que passa no Bardega as novidades e promoções.
                        </div>
                    </div>
    
                    <div class="row justify-content-center pt-3 mt-5">
                        <div class="col-12 text-center">
                            <button id="home-section4-box1-botao">VEJA TODOS</button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pl-4 pr-4 pl-lg-2 pr-lg-4 mt-4 text-center text-lg-left py-5 py-lg-0">
                    <div class="row">
                        <div class="col-12" id="home-section4-box2-title">
                            Ultimos dias dos pratos da Sherry Week
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12" id="home-section4-box2-calendar">
                            <i class="far fa-calendar fa-sm"></i> 01.01.2021
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12" id="home-section4-box2-text">
                            Os pratos feitos especialmente para a Sherry Week estão fazendo sucesso no Bardega.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 d-none d-lg-block">
                <img class="home-section4-imagem" src="{{asset('site/imagens/blog-1.png')}}" alt="Sherry Week">
            </div>
            <div class="col-12 col-lg-4 col-xl-2 text-center text-lg-left mt-4 mt-xl-0">
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

            <div class="col-12 col-lg-4 col-xl-2 text-center text-lg-left mt-4 mt-xl-0">
                <div class="container-fluid ml-0 ml-lg-n5">
                    <div class="row">
                        <div class="col-12">
                            <img class="home-section4-card-imagem" src="{{asset('site/imagens/blog-3.png')}}" alt="Sherry Week 3">
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4 ml-0 ml-lg-n5">
                    <div class="row">
                        <div class="col-12" id="home-section4-box4-title">
                            Ultimos dias dos pratos da Sherry Week
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12" id="home-section4-box4-calendar">
                            <i class="far fa-calendar fa-sm"></i> 01.01.2021
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12" id="home-section4-box4-text">
                            Os pratos feitos especialmente para a Sherry Week estão fazendo sucesso no Bardega.
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-start" id="home-section4-box4-link">
                            Veja mais <i class="fas fa-plus fa-sm"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('site.includes.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
    <script src="{{asset('site/js/jsfb.js')}}"></script>
    <script>
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (currentScrollPos > 400) {
                $("#container-nav").removeClass('nav-bottom');
                $("#container-nav").addClass('nav-rolled');
            } else {
                $("#container-nav").addClass('nav-bottom');
                $("#container-nav").removeClass('nav-rolled');
            }
        }
    </script>
    
</body>

</html>