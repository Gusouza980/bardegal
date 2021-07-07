@include('site.includes.head')
<body>
    @include('site.includes.fork')
    <nav class="navbar navbar-expand-lg bg-preto-1">
        <a class="navbar-brand" href="{{route('site.index')}}"><img src="{{asset('site/imagens/logo-branca.png')}}" alt="Logo Bardega"></a>
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
            <div class="col-12 border-left-laranja pl-3 galeria-section2-content text-center text-lg-left">
                <h1>ENVIE SUA MENSAGEM</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center text-lg-left contato-title">
                <span>A sua opinião é muito importante para nós.</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <form id="form-contato" class="mt-4" action="{{route('site.email')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <input type="text"
                              class="form-control contato-input" name="nome" id="" aria-describedby="helpId" placeholder="Nome*">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="text"
                              class="form-control contato-input" name="telefone" id="" aria-describedby="helpId" placeholder="Telefone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <input type="email"
                              class="form-control contato-input" name="email" id="" aria-describedby="helpId" placeholder="Email*">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <input type="text"
                              class="form-control contato-input" name="cidade" id="" aria-describedby="helpId" placeholder="Cidade">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                              <textarea class="form-control contato-input" name="mensagem" id="" rows="13" placeholder="Escreva uma mensagem*"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="g-recaptcha mx-auto" data-sitekey="6Lcub4AbAAAAAOst9h8ChAaI20VT6QhftWnbtiSV"></div>
                        </div>
                    </div>
                    <div class="row mt-3" id="contato-botao-enviar">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" name="" id="" class="btn btn-cinza btn-lg btn-block">Enviar</button>
                            </div>
                        </div>
                    </div>
                    <div class="row d-none" id="contato-ajax-loading">
                        <div class="col-12">
                            <div class="form-group text-center">
                                <img src="{{asset('site/imagens/ajax-loading.gif')}}" style="width: 50px;" alt="Ajax loading">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-6 px-5 text-center text-lg-left">
                <div class="row mt-4">
                    <div class="col-12 contato-content">
                        <span><i class="fas fa-phone-volume fa-lg mr-1"></i> (11) 2691 7578</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 contato-content">
                        <span><i class="fas fa-phone-volume fa-lg mr-1"></i> (11) 2691 7579</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 contato-content">
                        <span><i class="far fa-envelope fa-lg mr-1"></i>  reservas@bardega.com.br</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 contato-content">
                        <span><i class="far fa-envelope fa-lg mr-1"></i>  contato@bardega.com.br</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 contato-content">
                        <span><i class="fas fa-map-marker-alt fa-lg mr-1"></i> Rua Dr. Alceu de Campos<br>Rodrigues, 218</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 contato-content">
                        <span> Itaim Bibi - São Paulo,<br> SP - 04544-000</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 border-left-laranja pl-3 galeria-section2-content text-center text-lg-left">
                        <h1>ATENDIMENTO</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 contato-content">
                        <span> Terça a Sábado Das 17h às 21h</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 contato-content">
                        <span>Curta nossas redes sociais e<br>fique por dentro de tudo o<br>que acontece. </span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 contato-content">
                        <a href="https://www.facebook.com/bardegawinebar" target="_blank"><i class="fab fa-facebook text-white"></i></a>
                        <a href="https://www.instagram.com/bardega_winebar" target="_blank"><i class="fab fa-instagram text-white ml-4"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    @include('site.includes.footer')

    <!-- Modal -->
    <div class="modal fade" id="modalContatoSucesso" tabindex="-1" role="dialog" aria-labelledby="modalContatoSucessoLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h5>Obrigado! Recebemos sua mensagem e entraremos em contato assim que possível.</h5>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">
                                Certo!
                            </button>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalContatoErro" tabindex="-1" role="dialog" aria-labelledby="modalContatoErroLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h5>Erro ao enviar a mensagem. Tente novamente mais tarde.</h5>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">
                                Certo!
                            </button>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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

    <script>
        $(document).ready(function(){
            /*$("#form-contato").submit(function(e){
                e.preventDefault();
                var nome = $("input[name='nome']").val();
                var email = $("input[name='email']").val();
                var telefone = $("input[name='telefone']").val();
                var cidade = $("input[name='cidade']").val();
                var mensagem = $("textarea[name='mensagem']").val();
                var _token = $('meta[name="_token"]').attr('content');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': _token
                    }
                });  

                $.ajax({
                    url: '/email',
                    type: 'POST',
                    data: {
                        nome: nome,
                        email: email,
                        telefone: telefone,
                        cidade: cidade,
                        mensagem: mensagem
                    },
                    dataType: 'JSON',
                    beforeSend: function(){
                        $("#contato-botao-enviar").addClass("d-none");
                        $("#contato-ajax-loading").removeClass("d-none");
                    },
                    success: function(data) {
                        console.log(data);
                        if(data == "sucesso"){
                            $("#modalContatoSucesso").modal();
                        }else if(data == "captcha"){
                            console.log("Erro no captcha");
                        }else{
                            $("#modalContatoErro").modal();
                        }
                        $("#contato-botao-enviar").removeClass("d-none");
                        $("#contato-ajax-loading").addClass("d-none");
                    },
                    error: function(err){
                        console.log(err);
                        $("#modalContatoErro").modal();
                        $("#contato-botao-enviar").removeClass("d-none");
                        $("#contato-ajax-loading").addClass("d-none");
                    }
                });
            });*/
        });
    </script>
</body>

</html>