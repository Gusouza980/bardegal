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
                    <a class="nav-link" href="{{route('site.cardapio')}}"><span class="span-link">CARDÁPIO</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('site.eventos')}}"><span class="span-link">EVENTOS</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('site.reserva')}}"><span class="span-link">RESERVA</span></a>
                </li>
                {{--  <li class="nav-item">
                    <a class="nav-link" href="{{route('site.vinhos')}}"><span class="span-link">VINHOS</span></a>
                </li>  --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('site.galeria')}}"><span class="span-link">GALERIA</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('site.blog')}}"><span class="span-link">BLOG</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('site.contato')}}"><span class="span-link">CONTATO</span></a>
                </li>
            </ul>
        </div>
    </nav>

</div>