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
                    <a class="nav-link" href="https://www.facebook.com/bardegawinebar" target="_blank"><i class="fab fa-facebook text-white fa-lg"></i></a>
                </li>
                <li class="nav-item px-3 py-4 d-none d-xl-block">
                    <a class="nav-link" href="https://www.instagram.com/bardega_winebar" target="_blank"><i class="fab fa-instagram text-white fa-lg"></i></a>
                </li>
                <li class="nav-item px-3 py-4 d-none d-xl-block">
                    <a class="nav-link" href="https://api.whatsapp.com/send?phone=5511974300158" target="_blank"><i class="fab fa-whatsapp text-white fa-lg"></i></a>
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

    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1>{{$noticia->titulo}}</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center text-white">
                <h4>{{$noticia->subtitulo}}</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center text-white">
                <span>{{$noticia->categoria->nome}}</span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                {!! $noticia->conteudo !!}
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <a href="{{route('site.blog')}}">
                <div class="col-12 text-center blog-noticias-box-link">
                    <i class="fas fa-arrow-left mr-3"></i>Voltar
                </div>
            </a>
        </div>
    </div>
    
    @include('site.includes.footer')

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