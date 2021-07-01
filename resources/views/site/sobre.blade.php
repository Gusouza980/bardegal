@include('site.includes.head')
<body>
    @include('site.includes.fork')
    @include("site.includes.menu_mobile")
    
    <div class="container-fluid" style="background: url({{asset('site/imagens/sobre_topo.jpg')}}); background-size: cover; background-position: center;">      
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
                        O PRIMEIRO WINE BAR DO BRASIL, ESTÁ EM SÃO PAULO
                    </div>
                </div>

                <div class="row justify-content-center pt-3">
                    <div class="col-11 px-2 text-center" id="home-section1-box-subtext">
                        O espaço perfeito para
                        conhecer, degustar
                        e trocar experiências
                        sobre vinhos
                        do mundo todo.
                    </div>
                </div>

                <div class="row justify-content-center pt-3">
                    <div class="col-12 text-center">
                        <button id="home-section1-box-botao">VEJA ONDE ESTAMOS</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-md-block" style="display: block; position: absolute; top: 25px; left: 25px;">
            <img class="w-100" src="{{asset('site/imagens/logo-branca.png')}}" alt="Logo Bardega">
        </div>

        @include("site.includes.menu")

        <div class="d-none d-md-block" id="home-section1-nav-lateral" style="display: block; position: absolute; top: 0px; right: 0px; width: 80px;">
            <div class="container-fluid px-0 py-0">
                <div class="row mx-0">
                    <div class="col-12 px-0">
                        <div class="row pt-5 mt-5 mx-0">
                            <div class="col-12 py-3 px-0 text-center">
                                <a href="https://www.instagram.com/bardega_winebar" target="_blank"><i class="fab fa-instagram fa-lg text-white"></i></a>
                            </div>
                        </div>
                        <div class="row mx-0">
                            <div class="col-12 py-3 px-0 text-center">
                                <a href="https://api.whatsapp.com/send?phone=5511974300158" target="_blank"><i class="fab fa-whatsapp fa-lg text-white"></i></a>
                            </div>
                        </div>
                        <div class="row pb-5 mx-0">
                            <div class="col-12 py-3 px-0 text-center">
                                <a href="https://www.facebook.com/bardegawinebar" target="_blank"><i class="fab fa-facebook fa-lg text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  <div class="container-fluid bg-preto-1" >
        <div class="row d-flex justify-content-center align-items-center" id="sobre-section2">
            <div class="row justify-content-center align-items-center d-md-flex d-lg-none">
                <div class="col-10 col-md-8">
                    <div class="row bg-branco-1" id="sobre-section2-box">
                        <div class="col-12 py-3 px-5 text-center" id="sobre-section2-text">
                            <h3>Assista ao vídeo institucional sobre o Bardega </h3>
                            <button class="px-4 py-3 mt-2">Assista</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-8 col-lg-6" id="sobre-section2-video">
                <img src="{{asset('site/imagens/sobre-section2-video.png')}}" alt="Video Institucional">
                <div class="row d-none d-lg-block">
                    <div class="col-7">
                        <div class="row bg-branco-1" id="sobre-section2-box">
                            <div class="col-12 py-3 px-5" id="sobre-section2-text">
                                <h3>Assista ao vídeo institucional sobre o Bardega </h3>
                                <button class="px-4 py-3 mt-2">Assista</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>  --}}

    <div class="container-fluid bg-preto-2">
        <div class="row" id="sobre-section3">
            <div class="col-12 col-lg-4 px-0 sobre-section3-content text-lg-left text-center d-none d-lg-block">
                <img src="{{asset('site/imagens/sobre-section3.png')}}" alt="Começo">
            </div>
            <div class="col-12 col-lg-6 col-xl-5 mt-5 pt-4 pl-5 sobre-section3-content text-center text-lg-left py-5">
                <h4 class="mb-4">Como tudo começou</h4>
                <span>Os apaixonados por vinhos gostam de variedade, de conversar e de se sentir em casa
                    compartilhando momentos agradáveis com seus amigos. Baseados nesse princípio, um
                    grupo de amigos decidiu realizar um projeto absolutamente inovador e totalmente único
                    para o mercado brasileiro: tiraram os vinhos da adega e colocaram no bar.<br><br>
                    No Bardega, o que antes era um sonho se tornou realidade, pois o amante do vinho poderá,
                    em uma mesma noite, degustar e comparar vinhos do mundo todo ou ainda conhecer
                    aquele vinho especial, sem gastar uma grande quantia, já que é possível experimentar
                    doses a partir de R$ 6,00 antes de comprar uma taça ou uma garrafa. O sonho do Bardega
                    fica ainda mais divertido quando o ambiente é agradável e aconchegante, remetendo a sala
                    de estar da sua própria casa.<br><br>
                    A turma de amigos é bem eclética e por isso a sociedade funciona tão bem. No grupo há
                    empresários, engenheiros e executivos.</span>
            </div>
            <div class="col-12 col-lg-4 px-0 sobre-section3-content text-lg-left text-center d-block d-lg-none mt-5">
                <img src="{{asset('site/imagens/sobre-section3.png')}}" alt="Começo">
            </div>
        </div>
    </div>

    {{--  <div class="container-fluid bg-preto-2" id="sobre-section4">
        <div class="row">
            <div class="col-12 text-center mt-5 mt-lg-0">
                <img src="{{asset('site/imagens/retangulo-laranja.png')}}" alt="Retângulo Laranja">
            </div>    
        </div>
        <div class="row mt-3">
            <div class="col-12 sobre-section4-content text-center">
                <span>Curiosidades</span>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 sobre-section4-content text-center">
                <h4>Conheça um pouco mais do Bardega Wine Bar</h4>
            </div>
        </div>
        <div class="row mt-5 px-5 px-lg-0">
            <div class="col-12 col-lg-4 px-0 mt-5 mt-lg-0 text-center sobre-section4-content p-relative">
                <img src="{{asset('site/imagens/sobre-vinho.png')}}" alt="Vinho">
                <div class="bg-branco-1 pt-4 pb-2 text-center sobre-section4-box">
                    VINHO
                </div>
                <button class="sobre-section4-button py-3" >Saiba mais</button>
            </div>
            <div class="col-12 col-lg-4 px-0 mt-5 mt-lg-0 text-center sobre-section4-content p-relative">
                <img src="{{asset('site/imagens/sobre-galeria.png')}}" alt="Galeria">
                <div class="bg-branco-1 pt-4 pb-2 text-center sobre-section4-box">
                    GALERIA
                </div>
                <button class="sobre-section4-button py-3" >Saiba mais</button>
            </div>
            <div class="col-12 col-lg-4 px-0 mt-5 mt-lg-0 text-center sobre-section4-content p-relative">
                <img src="{{asset('site/imagens/sobre-cardapio.png')}}" alt="Cardápio">
                <div class="bg-branco-1 pt-4 pb-2 text-center sobre-section4-box">
                    CARDÁPIO
                </div>
                <button class="sobre-section4-button py-3" >Saiba mais</button>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-preto-1 py-5">
        <div class="row d-flex justify-content-center py-5 mt-5" id="sobre-section5">
            <div class="col-12 col-lg-2 text-center text-lg-left">
                <div class="row d-flex justify-content-end">
                    <div class="col-xl-9 col-lg-12 sobre-section5-content border-left-laranja">
                        <h1>BEBA OS MELHORES VINHOS</h1>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 px-1 sobre-section5-content text-center text-lg-left mt-5 mt-lg-0">
                <img src="{{asset('site/imagens/sobre-vinho-conserva.png')}}" alt="Vinha Conserva">
                <h3 class="mt-4 mb-4">Como conservar um vinho depois de aberto</h3>
                <a href="">VEJA MAIS+</a>
            </div>
            <div class="col-12 col-lg-2 px-1 sobre-section5-content text-center text-lg-left mt-5 mt-lg-0">
                <img src="{{asset('site/imagens/sobre-vinho-rose.png')}}" alt="Vinha Rose">
                <h3 class="mt-4 mb-4">Curiosidades sobre o vinho Rosé</h3>
                <a href="">VEJA MAIS+</a>
            </div>
            <div class="col-12 col-lg-2 px-1 sobre-section5-content text-center text-lg-left mt-5 mt-lg-0">
                <img src="{{asset('site/imagens/sobre-vinho-namorados.png')}}" alt="Dia dos namorados">
                <h3 class="mt-4 mb-4">Menu dia dos Namorados</h3>
                <a href="">VEJA MAIS+</a>
            </div>
            <!-- <div class="col-12 col-lg-2 sobre-section-5-content d-none d-xl-block">
                <img src="{{asset('site/imagens/sobre-vinho-fundo.png')}}" alt="Taça de Vinho">
            </div> -->
            
        </div>
        <div class="row pb-5 mb-5">
            <div class="col-12 text-center text-lg-left col-lg-8 offset-lg-4 sobre-section5-content">
                <a href="https://api.whatsapp.com/send?phone=5535991783500" target="_blank" class="py-3 px-4 button-link">Faça seu evento no Bardega</a>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-preto-2 pb-5" id="sobre-section6">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-3 sobre-section6-imagem-maior px-0 d-none d-xl-block">
                <img src="{{asset('site/imagens/sobre-happy-maior.png')}}" alt="Prato Happy Hour">
            </div>
            <div class="col-12 col-sm-6 col-xl-2 pl-4">
                <div class="border-left-laranja sobre-section6-text pl-3">
                    <h3>Confira nossas happy hours</h3>
                </div>
                <div class="sobre-section6-text">
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
    </div>  --}}

    @include('site.includes.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
    <script>
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            console.log(currentScrollPos);
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