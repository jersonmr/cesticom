<header class="header">
  <section class="header__ribbon">
    <div class="container">
      <div class="row py-2 align-items-center justify-content-center justify-content-md-between">
        <div class="col-md-8 text-center text-md-left">
          <img src="{{ asset('img/icono-telefono-cesticom.svg') }}" alt="">
          <span class="header__ribbon__text">Atención al cliente: +58 XXX XXXX | +58 XXX XXXX</span>
        </div>
        <div class="col-md-4 text-center text-md-right">
          <a href="#" class="header__ribbon__social">
            <img src="{{ asset('img/icono-linkedin-cesticom-azul.svg') }}" alt="LinkedIn">
          </a>
          <a href="#" class="header__ribbon__social">
            <img src="{{ asset('img/icono-facebook-cesticom-azul.svg') }}" alt="Facebook">
          </a>
          <a href="#" class="header__ribbon__social">
            <img src="{{ asset('img/icono-twitter-cesticom-azul.svg') }}" alt="Twitter">
          </a>
          <a href="#" class="header__ribbon__social">
            <img src="{{ asset('img/icono-instagram-cesticom-azul.svg') }}" alt="Instagram">
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="header__navbar">
    <div class="container">
      <nav class="navbar navbar-expand-md navbar-dark px-0">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/logo-cesticom.svg') }}" alt="Logo Cesticom" class="header__logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseNavbar" aria-controls="collapseNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color: #fff !important;"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapseNavbar">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="{{ \Illuminate\Support\Facades\Request::is('/') ? 'nav-link active' : 'nav-link'}}" href="{{ route('home') }}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="{{ \Illuminate\Support\Facades\Request::is('nosotros') ? 'nav-link active' : 'nav-link'}}" href="{{ route('about') }}">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Portafolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </section>
</header>