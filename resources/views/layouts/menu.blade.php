<nav class="navbar navbar-expand-lg bg-white @if(Request::is('noticia/*')) boder-bottom-green @endif">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/ag.png') }}" alt="Logo" width="60">
            &nbsp;Travel Representations
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if(Request::is('/')) active @endif">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item @if(Request::is('quienes-somos')) active @endif">
                <a class="nav-link" href="{{ asset('/quienes-somos') }}">Quienes Somos</a>
                </li>
                <li class="nav-item @if(Request::is('destinos')) active @endif">
                <a class="nav-link" href="{{ asset('/destinos') }}">Destinos</a>
                </li>
                <li class="nav-item @if(Request::is('aavv')) active @endif">
                <a class="nav-link" href="{{ asset('/aavv') }}">AAVV</a>
                </li>
                <li class="nav-item @if(Request::is('servicios')) active @endif">
                    <a class="nav-link" href="{{ asset('servicios') }}">Servicios</a>
                </li>
                <li class="nav-item @if(Request::is('blog')) active @endif">
                <a class="nav-link" href="{{ asset('/blog') }}">Blog</a>
                </li>
                <li class="nav-item @if(Request::is('contacto')) active @endif">
                <a class="nav-link" href="{{ asset('/contacto') }}">Contacto</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#">|</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acceso Agencias</a>
                </li>-->
            </ul>
        </div>
    </div>
</nav>