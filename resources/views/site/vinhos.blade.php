<!doctype html>
<html lang="pt-br">

<head>
    <title>Bardega</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('site/css/main.css')}}">
</head>

<body>
    <div class="container-fluid"  id="nav-mobile-container">

        <nav class="navbar navbar-expand-lg navbar-light d-block d-lg-none">
            <button class="navbar-toggler float-right" style="color:white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color:white;"><i class="fas fa-bars"></i></span>
            </button>
    
            <div class="collapse navbar-collapse" style="background-color: black; color: white !important;" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto bg-branco text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html"><span class="span-link link-active">HOME</span> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pumpkin.html"><span class="span-link">PUMPKIN</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cases.html"><span class="span-link">CASES</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html"><span class="span-link">BLOG</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.html"><span class="span-link">CONTATO</span></a>
                    </li>
                </ul>
            </div>
        </nav>
 
    </div>
    <div class="container-fluid" style="background: url({{asset('site/imagens/background-home-1.png')}}); background-size: cover; background-position: center;">      
        <div class="row justify-content-center align-items-center" style=" min-height: 100vh;">
            <div class="col-lg-4 col-md-8" style="background-color: black; color:white;">
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
                        Nossos rótulos
                    </div>
                </div>

                <div class="row justify-content-center pt-3 pb-5">
                    <div class="col-11 px-2 text-center" id="home-section1-box-subtext">
                        A seleção dos rótulos que compõe a carta 
                        doBardega ficou a cargo do experiente Arthur 
                        Azevedo Veja o que ele tem a dizer.
                    </div>
                </div>

            </div>
        </div>
        <div class="d-none d-md-block" style="display: block; position: absolute; top: 25px; left: 25px;">
            <img class="w-100" src="{{asset('site/imagens/logo-branca.png')}}" alt="Logo Bardega">
        </div>
        <div class="d-none d-md-block" style="display: block; position: absolute; top: calc(50% - 50px); left: 0px; border-top-right-radius: 15px; border-bottom-right-radius: 15px;">
            <img class="w-100" src="{{asset('site/imagens/botao-reserva-mesa.png')}}" alt="Reservar mesa">
        </div>

        <div id="container-nav" class="d-none d-lg-block nav-bottom">
            <ul id="home-section1-nav">
                <li class="home-section1-nav-item px-4 pt-4 pb-3">
                    HOME
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3">
                    BARDEGA
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3">
                    VINHOS
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3">
                    CARDÁPIO
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3">
                    BLOG
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3">
                    GALERIA
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3 bg-laranja-1 text-white">
                    CONTATO
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3 bg-preto-1 text-white">
                    EN
                </li>
                <li class="home-section1-nav-item px-4 pt-4 pb-3 bg-preto-1 text-white">
                    <i class="fas fa-search"></i>
                </li>
            </ul>
        </div>

        <div class="d-none d-md-block" id="home-section1-nav-lateral" style="display: block; position: absolute; top: 0px; right: 0px; width: 80px;">
            <div class="container-fluid px-0 py-0">
                <div class="row mx-0">
                    <div class="col-12 px-0">
                        <div class="row pt-5 mt-5 mx-0">
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
                        <div class="row mx-0 mt-2 py-3 text-center justify-content-center">
                            <div class="col-2 px-0 text-center" id="home-section1-nav-lateral-page-number">
                                <span>1 / 5</span>
                            </div>
                        </div>
                        <div class="row mx-0">
                            <div class="col-6 home-section1-nav-lateral-page-buttons bg-preto-1 text-white py-3">
                                <i class="fas fa-chevron-left fa-sm"></i>
                            </div>
                            <div class="col-6 home-section1-nav-lateral-page-buttons bg-laranja-1 text-white py-3">
                                <i class="fas fa-chevron-right fa-sm"></i>
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
                            Veja nossas maquinas Enomatic
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
                <img src="{{asset('site/imagens/video-home-section2.png')}}" class="w-100" alt="Vídeo Bardega">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row d-flex justify-content-start mt-5 pt-5">
            <div class="col-12 col-lg-2 offset-lg-3 text-center text-lg-left">
                <div class="row d-flex justify-content-start">
                    <div class="col-xl-9 col-lg-12 sobre-section5-content border-left-laranja">
                        <h1>Carta de vinho </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-start py-5" id="sobre-section5">
            <div class="col-12 col-lg-2 offset-lg-3 text-center text-lg-left">
                <div class="row d-flex justify-content-start">
                    <div class="col-xl-9 col-lg-12 sobre-section5-content">
                        <h3 class="mb-4">Degustação dos melhores vinhos</h3>
                        <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</span><br>
                        <div class="mt-4 sobre-section5-content">
                            <a href="">VEJA MAIS+</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 px-1 sobre-section5-content text-center text-lg-left mt-5 mt-lg-0">
                <img src="{{asset('site/imagens/sobre-vinho-conserva.png')}}" alt="Vinha Conserva">
                <h3 class="mt-4 mb-4">Espumante</h3>
                <a href="">VEJA MAIS+</a>
            </div>
            <div class="col-12 col-lg-2 px-1 sobre-section5-content text-center text-lg-left mt-5 mt-lg-0">
                <img src="{{asset('site/imagens/sobre-vinho-rose.png')}}" alt="Vinha Rose">
                <h3 class="mt-4 mb-4">Brancos</h3>
                <a href="">VEJA MAIS+</a>
            </div>
            <div class="col-12 col-lg-2 px-1 sobre-section5-content text-center text-lg-left mt-5 mt-lg-0">
                <img src="{{asset('site/imagens/sobre-vinho-namorados.png')}}" alt="Dia dos namorados">
                <h3 class="mt-4 mb-4">Rosés</h3>
                <a href="">VEJA MAIS+</a>
            </div>      
        </div>
    </div>

    <div class="container-fluid bg-preto-2 pb-5" id="sobre-section6">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-3 vinho-section3-imagem-maior px-0 d-none d-xl-block">
                <img src="{{asset('site/imagens/vinho-section3.png')}}" alt="Vinho Clásico">
            </div>
            <div class="col-12 col-sm-6 col-xl-2 pl-4 mt-5 mt-lg-0">
                <div class="border-left-laranja sobre-section6-text pl-3 text-center text-lg-left">
                    <h3>Confira nossas happy hours</h3>
                </div>
                <div class="sobre-section6-text text-center text-lg-left mt-5 mt-lg-0">
                    <span>
                        Nosso cardápio apresenta acompanhamentos especialmente criados para harmonizar com nossos memoráveis vinhos. Venha conhecer e saborear!
                    </span>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-2 px-2 sobre-section6-imagem p-relative text-center mt-5 mt-xl-0">
                <img src="{{asset('site/imagens/sobre-happy-1.png')}}" alt="Happy Hour 1">
                <div class="bg-branco-1 text-center sobre-section6-box">
                    SELEÇÃO DE EMBUTIDOS
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-2 px-2 sobre-section6-imagem p-relative text-center mt-5 mt-xl-0">
                <img src="{{asset('site/imagens/sobre-happy-2.png')}}" alt="Happy Hour 1">
                <div class="bg-branco-1 text-center sobre-section6-box">
                    BARRIGA DE PORCO APURURUCA
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-2 px-2 sobre-section6-imagem p-relative text-center mt-5 mt-xl-0">
                <img src="{{asset('site/imagens/sobre-happy-3.png')}}" alt="Happy Hour 1">
                <div class="bg-branco-1 text-center sobre-section6-box">
                    SELEÇÃO DE EMBUTIDOS
                </div>
            </div>
        </div>
        <div class="row py-5 mt-5">
            <div class="col-12 text-center video-section3-button">
                <button class="px-5 py-3">Faça seu evento no Bardega</button>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="row py-5">
            <div class="col-12 col-lg-3 offset-lg-3">
                <div class="border-left-laranja vinho-section4-content pl-3 text-center text-lg-left">
                    <h3>Como tudo começou</h3>
                </div>
                <div class="vinho-section4-content mt-5">
                    <h5>Para a elaboração da carta de vinhos do Bardega, Arthur Azevedo conta que realizou uma seleção minuciosa para compor os rótulos da primeira carta. "Levamos em consideração três critérios: a qualidade, com nomes considerados essenciais por enólogos de todo o mundo, a diversidade, com produtos de diversos estilos encontrados nos principais países produtores, e a originalidade, uma vez que a proposta do wine bar é que o consumidor possa descobrir novos vinhos e se surpreender com eles".</h5>
                </div>
                <div class="vinho-section4-balao px-5 py-3 mt-5">
                    "O Bardega possui um conceito
                    único pouco visto pelo mundo,
                    democratização do vinho..."
                    <div class="text-right mt-4">
                        - Arthur Azevedo
                    </div>
                </div>
                <div class="vinho-section4-content mt-5">
                    <h5>Arthur ainda destaca que o Bardega possui um conceito único pouco visto pelo mundo, a democratização do vinho, e aposta que o local funcionará como um pólo formador de opinião para os admiradores da bebida.</h5>
                </div>  
            </div>
            <div class="col-12 col-lg-3 ml-0 ml-lg-5 mt-5">
                <div class="vinho-section4-box py-5 px-5 bg-preto-2">
                    Arthur Azevedo é Diretor da Associação Brasileira de Sommeliers (ABS-SP), editor da revista Wine Style (2005/2011), jornalista especializado em vinhos, palestrante, consultor da Artwine, membro de confrarias internacionais e responsável pelo site www.artwine.com.br
                </div>
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
                                    Rua Dr. Alceu de Campos Rodrigues, 218 Itaim Bibi - São Paulo, SP - 04544-000<br><br>
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
                                    <span>Junte-se à nossa lista de discussão e<br>mantenha-se atualizado com a Bardega</span>
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
                                            <li><i class="fas fa-chevron-right mt-4"></i>&nbsp;&nbsp; Sobre o Bardega</li>
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
                    <div id="footer-direitos" class="text-center text-sm-left col-12 col-sm-6 footer-direitos-text pl-0 pl-sm-5">
                        Todos os direitos reservados
                    </div>
                    <div id="footer-copy" class="text-center text-sm-right col-12 col-sm-6 footer-copy-text text-right pr-0 pr-sm-5">
                        DESENVOLVIDO POR <img src="{{asset('site/imagens/footer-seven.png')}}" alt="Logo 7seven"> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
</body>

</html>