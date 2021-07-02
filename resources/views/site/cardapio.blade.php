@include('site.includes.head')
<body>
    @include('site.includes.fork')
    @include("site.includes.menu_mobile")
    <div class="container-fluid" style="background: url({{asset('site/imagens/cardapio_topo.jpg')}}); background-size: cover; background-position: center;">      
        <div class="row justify-content-start align-items-center" style=" min-height: 100vh;">
            <div class="offset-lg-2 offset-md-2 col-lg-5 col-md-8" style="background-color: black; color:white;">
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
                        Nosso cardápio apresenta acompanhamentos
                        especialmente criados para harmonizarcom 
                        nossos memoráveis vinhos.Venha conhecer e saborear!
                    </div>
                </div>
                <div class="row justify-content-center pt-5">
                    <div class="col-12 text-center">
                        <a href="{{asset($cardapio->caminho)}}" download><button id="cardapio-section1-box-botao">Veja nosso menu</button></a>
                    </div>
                </div>

                {{--  <div class="row justify-content-center pt-3 pb-5">
                    <div class="col-11 px-2 text-center" id="home-section1-box-subtext">
                        Nosso cardápio apresenta acompanhamentos
                        especialmente criados para harmonizarcom 
                        nossos memoráveis vinhos.Venha conhecer e saborear!
                    </div>
                </div>  --}}

            </div>
        </div>
        <div class="d-none d-md-block" style="display: block; position: absolute; top: 25px; left: 25px;">
            <a href="{{route('site.index')}}"><img class="w-100" src="{{asset('site/imagens/logo-branca.png')}}" alt="Logo Bardega"></a>
        </div>
        {{--  <div class="d-none d-md-block" style="display: block; position: absolute; top: calc(50% - 50px); left: 0px; border-top-right-radius: 15px; border-bottom-right-radius: 15px;">
            <img class="w-100" src="{{asset('site/imagens/botao-reserva-mesa.png')}}" alt="Reservar mesa">
        </div>  --}}

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
                        {{--  <div class="row mx-0">
                            <div class="col-12 py-3 px-0 text-center">
                                <i class="fab fa-twitter fa-lg text-white"></i>
                            </div>
                        </div>  --}}
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
                        {{--  <div class="row mx-0 mt-2 py-3 text-center justify-content-center">
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
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION 2 -->
    {{--  <div class="container-fluid py-5">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col-12 text-center text-lg-left cardapio-section2-galeria">
                        <h3>Queijos e Embutidos</h3>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-lg-4 text-center text-lg-left cardapio-section2-galeria mt-5 mt-lg-0">
                        <img src="{{asset('site/imagens/sobre-happy-1.png')}}" alt="Queijos e Embutidos 1">
                    </div>
                    <div class="col-12 col-lg-4 text-center text-lg-left cardapio-section2-galeria mt-5 mt-lg-0">
                        <img src="{{asset('site/imagens/sobre-happy-1.png')}}" alt="Queijos e Embutidos 1">
                    </div>
                    <div class="col-12 col-lg-4 text-center text-lg-left cardapio-section2-galeria mt-5 mt-lg-0">
                        <img src="{{asset('site/imagens/sobre-happy-1.png')}}" alt="Queijos e Embutidos 1">
                    </div>
                </div>
    
                <div class="row mt-5">
                    <div class="col-12 text-center text-lg-left cardapio-section2-galeria">
                        <h3>Entradas</h3>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-lg-4 text-center text-lg-left cardapio-section2-galeria mt-5 mt-lg-0">
                        <img src="{{asset('site/imagens/sobre-happy-1.png')}}" alt="Queijos e Embutidos 1">
                    </div>
                    <div class="col-12 col-lg-4 text-center text-lg-left cardapio-section2-galeria mt-5 mt-lg-0">
                        <img src="{{asset('site/imagens/sobre-happy-1.png')}}" alt="Queijos e Embutidos 1">
                    </div>
                    <div class="col-12 col-lg-4 text-center text-lg-left cardapio-section2-galeria mt-5 mt-lg-0">
                        <img src="{{asset('site/imagens/sobre-happy-1.png')}}" alt="Queijos e Embutidos 1">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12 text-center text-lg-left cardapio-section2-galeria">
                        <h3>Bruschettas</h3>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-lg-4 text-center text-lg-left cardapio-section2-galeria mt-5 mt-lg-0">
                        <img src="{{asset('site/imagens/sobre-happy-1.png')}}" alt="Queijos e Embutidos 1">
                    </div>
                    <div class="col-12 col-lg-4 text-center text-lg-left cardapio-section2-galeria mt-5 mt-lg-0">
                        <img src="{{asset('site/imagens/sobre-happy-1.png')}}" alt="Queijos e Embutidos 1">
                    </div>
                    <div class="col-12 col-lg-4 text-center text-lg-left cardapio-section2-galeria mt-5 mt-lg-0">
                        <img src="{{asset('site/imagens/sobre-happy-1.png')}}" alt="Queijos e Embutidos 1">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12 text-center text-lg-left cardapio-section2-galeria">
                        <h3>Principais</h3>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-lg-4 text-center text-lg-left cardapio-section2-galeria mt-5 mt-lg-0">
                        <img src="{{asset('site/imagens/sobre-happy-1.png')}}" alt="Queijos e Embutidos 1">
                    </div>
                    <div class="col-12 col-lg-4 text-center text-lg-left cardapio-section2-galeria mt-5 mt-lg-0">
                        <img src="{{asset('site/imagens/sobre-happy-1.png')}}" alt="Queijos e Embutidos 1">
                    </div>
                    <div class="col-12 col-lg-4 text-center text-lg-left cardapio-section2-galeria mt-5 mt-lg-0">
                        <img src="{{asset('site/imagens/sobre-happy-1.png')}}" alt="Queijos e Embutidos 1">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center cardapio-section2-galeria">
                        <span> Nossos pratos são desenvolvidos com ingredientes selecionados. Buscamos sempre o melhor para estar à altura de nossos vinhos!</span>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center cardapio-section2-galeria">
                        <span>Temos várias opções de pratos quentes, frios e sobremesas. Se optar em tomar cerveja, temos algumas opções bem especiais. Faça a sua happy hour no Bardega!</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-12 text-center text-lg-left cardapio-section2-noticias border-left-laranja">
                        <h3>BLOG</h3>
                    </div>
                </div>
                <div class="container-fluid mt-5 px-0 text-center">
                    <div class="row">
                        <div class="col-12">
                            <img class="home-section4-card-imagem" src="{{asset('site/imagens/blog-2.png')}}" alt="Sherry Week 2">
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4 px-0 text-center">
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

                <div class="container-fluid mt-5 px-0 text-center">
                    <div class="row">
                        <div class="col-12">
                            <img class="home-section4-card-imagem" src="{{asset('site/imagens/blog-2.png')}}" alt="Sherry Week 2">
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4 px-0 text-center">
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
                <a href="https://api.whatsapp.com/send?phone=5535991783500" target="_blank" class="px-5 py-3">Faça seu evento no Bardega</a href="">
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