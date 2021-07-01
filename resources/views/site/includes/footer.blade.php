<div class="container-fluid bg-branco-1">
    <div class="row">
        <div class="col-12 col-lg-5 pt-5">
            <div class="row pt-0 pt-lg-5 h-100">
                <div class="col-12 col-lg-6 d-none d-lg-block" id="footer-1">

                </div>
                <div class="col-12 col-lg-6 mt-0 mt-lg-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 px-3 text-center text-lg-left">
                                <a href="{{route('site.index')}}"><img src="{{ asset('site/imagens/logo-preta.png') }}" id="footer-logo"
                                    alt="Logo footer"></a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center text-lg-left">
                                <button id="footer-button-1" data-toggle="modal" data-target="#modalReserva">Reservar Mesa</button>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 text-center text-lg-left pb-5 pb-lg-0" id="footer-text-1">
                                (11) 2691 7578<br>
                                reservas@bardega.com.br<br>
                                contato@bardega.com.br<br><br>
                                Rua Dr. Alceu de Campos Rodrigues, 218 Itaim Bibi - São Paulo, SP - 04544-000<br><br>
                                Terça a Sábado Das 17h às 21h
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
                        <form action="{{ route('site.lead') }}" method="post">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-12 text-center text-lg-left" id="footer-newsletter-input">
                                    <input type="text" name="email" placeholder=" Informe seu e-mail">
                                    <button type="submit" class="ml-n1">Enviar</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-12 footer-newsletter-text text-center text-lg-left">
                                <span>Ao enviar seu e-mail, você aceita a política de privacidade.</span>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="text-white text-center text-lg-left" id="footer-links">
                                    <ul class="px-0" style="list-style: none;">
                                        <li><a href="{{route('site.index')}}"><i class="fas fa-chevron-right"></i>&nbsp;&nbsp; Home</a></li>
                                        <li><a href="{{route('site.cardapio')}}"><i class="fas fa-chevron-right mt-4"></i>&nbsp;&nbsp; Cardápio</a></li>
                                        <li><a href="{{route('site.eventos')}}"><i class="fas fa-chevron-right mt-4"></i>&nbsp;&nbsp; Eventos</a></li>
                                        <li><a href="{{route('site.reserva')}}"><i class="fas fa-chevron-right mt-4"></i>&nbsp;&nbsp; Reserva</a></li>
                                        <li><a href="{{route('site.galeria')}}"><i class="fas fa-chevron-right mt-4"></i>&nbsp;&nbsp; Galeria</a></li>
                                        <li><a href="{{route('site.blog')}}"><i class="fas fa-chevron-right mt-4"></i>&nbsp;&nbsp; Blog</a></li>
                                        <li><a href="{{route('site.contato')}}"><i class="fas fa-chevron-right mt-4"></i>&nbsp;&nbsp; Contato</a></li>
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
                                {{-- <div id="trip" class="mx-auto">

                                    <div id="TA_selfserveprop958" class="TA_selfserveprop">
                                        <div id="CDSWIDSSP" class="widSSP widSSPnarrow" style="width: 240px;"> <a
                                                class="widSSPClickWrap" target="_blank"
                                                href="https://www.tripadvisor.com.br/Restaurant_Review-g303631-d6919826-Reviews-Bardega_Wine_Bar-Sao_Paulo_State_of_Sao_Paulo.html"
                                                onclick="ta.cds.handleTALink(11900,this);return true;"></a>
                                            <div class="widSSPData  withBorder   cx_brand_refresh ">
                                                <div class="widSSPBranding">
                                                    <dl>
                                                        <dt> <a target="_blank"
                                                                href="https://www.tripadvisor.com.br/"><img style="max-width: 100%;"
                                                                    src="https://www.tripadvisor.com.br/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-11900-2.svg"
                                                                    alt="TripAdvisor" class="logo"></a> </dt>
                                                    </dl>
                                                </div>
                                                <!--/ cdsBranding-->
                                                <div class="widSSPComponent">
                                                    <div class="widSSPSummary">
                                                        <dl> <a target="_blank"
                                                                href="https://www.tripadvisor.com.br/Restaurant_Review-g303631-d6919826-Reviews-Bardega_Wine_Bar-Sao_Paulo_State_of_Sao_Paulo.html"
                                                                onclick="ta.cds.handleTALink(11900,this);return true;"
                                                                rel="nofollow">
                                                                <dt class="widSSPH18">Bardega Wine Bar</dt>
                                                            </a> </dl>
                                                    </div>
                                                    <!--/ cdsSummary-->
                                                </div>
                                                <!--/ cdsComponent-->
                                                <div class="widSSPComponent widSSPOptional">
                                                    <div class="widSSPTrvlRtng">
                                                        <dl>
                                                            <dt class="widSSPH11">Pontuação dos viajantes no Tripadvisor
                                                            </dt>
                                                            <dd>
                                                                <div class="widSSPOverall"> <span
                                                                        class="ui_bubble_rating bubble_40"></span>
                                                                    <span>703 avaliações</span> </div>
                                                                <!--/ overall -->
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                                <!--/ cdsComponent -->
                                                <div class="widSSPWrap widSSPOptional">
                                                    <div class="widSSPInformation">
                                                        <div class="widSSPWrap">
                                                            <dl>
                                                                <dt class="widSSPH11">Ranking do Tripadvisor</dt>
                                                            </dl>
                                                            <div class="widSSPPopIdx widSSPSingle"> <span
                                                                    class="widSSPPopIdxData"> <span
                                                                        class="widSSPPopIdxData"> <sup>#</sup>336 de
                                                                        27593 </span> restaurantes em São Paulo </span>
                                                            </div>
                                                            <!--/ popIdx-->
                                                        </div>
                                                        <!--/ cdsWrap-->
                                                    </div>
                                                    <!--/ cdsInformation-->
                                                </div>
                                                <!--/ cdsWrap-->
                                                <div class="widSSPComponent widSSPOptional">
                                                    <dl class="widSSPReviews">
                                                        <dt class="widSSPH11">Avaliações recentes dos viajantes</dt>
                                                        <dd class="widSSPOneReview">
                                                            <ul class="widSSPBullet">
                                                                <li> <span class="widSSPQuote">“Ótima opção para
                                                                        conhecer vinhos....”</span> </li>
                                                                <li> <span class="widSSPQuote">“Super recomendo,
                                                                        Ambiente”</span> </li>
                                                                <li> <span class="widSSPQuote">“VERGONHA!”</span> </li>
                                                                <li> <span class="widSSPQuote">“Conhecendo o
                                                                        Bardega”</span> </li>
                                                                <li> <span class="widSSPQuote">“Local
                                                                        aconchegante”</span> </li>
                                                            </ul>
                                                            <!--/ bullet-->
                                                        </dd>
                                                        <!--/ hReview-->
                                                    </dl>
                                                </div>
                                                <div class="widSSPAll">
                                                    <ul class="widSSPReadReview">
                                                        <li><a href="https://www.tripadvisor.com.br/Restaurant_Review-g303631-d6919826-Reviews-Bardega_Wine_Bar-Sao_Paulo_State_of_Sao_Paulo.html"
                                                                id="allreviews"
                                                                onclick="ta.cds.handleTALink(11900,this);window.open(this.href, 'newTAWindow', 'toolbar=1,resizable=1,menubar=1,location=1,status=1,scrollbars=1,width=800,height=600'); return false"
                                                                rel="nofollow">Leia avaliações</a></li>
                                                    </ul>
                                                    <ul class="widSSPWriteReview">
                                                        <li><a href="https://www.tripadvisor.com.br/UserReview-g303631-d6919826-Bardega_Wine_Bar-Sao_Paulo_State_of_Sao_Paulo.html"
                                                                id="writereview"
                                                                onclick="ta.cds.handleTALink(11900,this);window.open(this.href, 'newTAWindow', 'toolbar=1,resizable=1,menubar=1,location=1,status=1,scrollbars=1,width=800,height=600'); return false"
                                                                rel="nofollow">Faça uma avaliação</a></li>
                                                    </ul>
                                                </div>
                                                <!--/ cdsAll-->
                                            </div>
                                            <!--/ cdsData-->
                                        </div>
                                        <!--/ CDSPOP.cdsBx-->
                                    </div>
                                    <script
                                        src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=958&amp;locationId=6919826&amp;lang=pt&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2">
                                    </script>
                                </div> --}}
                                <div id="TA_certificateOfExcellence769" class="TA_certificateOfExcellence">
                                    <ul id="XAM9ot8" class="TA_links Nh7Lk3MeKe">
                                        <li id="lZRMMz" class="TbFOX6czpQ"><a target="_blank"
                                                href="https://www.tripadvisor.pt/Restaurant_Review-g303631-d6919826-Reviews-Bardega_Wine_Bar-Sao_Paulo_State_of_Sao_Paulo.html"><img
                                                    src="https://www.tripadvisor.pt/img/cdsi/img2/awards/v2/tchotel_2020_LL-14348-2.png"
                                                    alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO" /></a></li>
                                    </ul>
                                </div>
                                <script async
                                    src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=769&amp;locationId=6919826&amp;lang=pt_PT&amp;year=2020&amp;display_version=2"
                                    data-loadtrk onload="this.loadtrk=true"></script>
                                {{-- <img src="{{asset('site/imagens/advisor.png')}}" id="footer-image-advisor" alt="Advisor"> --}}
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-end">
                            {{-- <div class="col-12 col-lg-4 text-center text-lg-left footer-advisor-text">
                                <img src="{{ asset('site/imagens/advisor-2.png') }}" id="footer-image-advisor2"
                                    alt="Advisor 2">
                            </div> --}}
                            <div class="col-12 col-lg-8 text-center text-lg-left footer-advisor-text">
                                <span>Curta nossas redes sociais e fique por dentro de tudo o que acontece. </span>
                                <p class="mt-3">
                                    <a href="https://www.facebook.com/bardegawinebar" target="_blank"><i class="fab fa-facebook text-white fa-lg"></i></a>
                                    <a href="https://www.instagram.com/bardega_winebar" target="_blank"><i class="fab fa-instagram text-white fa-lg ml-3"></i></a>
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
                    DESENVOLVIDO POR <a href="https://7seventrends.com"><img class="mt-n1" src="{{ asset('site/imagens/footer-seven.png') }}" alt="Logo 7seven"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalReserva" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <iframe src="https://module.lafourchette.com/pt_BR/module/69618-d4897" style="width: 100%; min-height:500px; border:none; scrolling:yes;">
                </iframe>
            </div>
        </div>
    </div>
</div>
