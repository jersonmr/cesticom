@extends('layout.front')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/owl.theme.default.min.css') }}">
@endsection

@section('content')
  {{--Banner--}}
  <section class="banner">
    <div class="banner__content">
      <h2 class="banner__text mb-0">Somos trabajo</h2>
      <h2 class="banner__text banner__text--bold">En equipo</h2>
    </div>
  </section>

  {{--Hero Text--}}
  <section class="hero-text py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offet-md-1 mx-auto">
          <h1 class="hero-text__text">
            <span class="highlight">Transformamos</span> conocimientos en productos y servicios para satisfacer sus <span class="highlight">requerimientos</span>
            <br> con soluciones inteligentes, creativas e innovadoras
          </h1>
        </div>
      </div>
    </div>
  </section>

  {{--Focus--}}
  <section class="focus py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 focus__column">
          <img src="{{ asset('img/icono-enfoque-agil.png') }}" alt="Enfoque agil"
                                   class="focus__img">
          <h2 class="focus__title">Enfoque Ágil</h2>
          <p class="focus__description">
            La entrega progresiva del producto adaptado a los cambios son nuestra prioridad
          </p>
        </div>
        <div class="col-md-4 focus__column">
          <img src="{{ asset('img/icono-centrados-en-el-cliente.png') }}" alt="Centrados en el cliente" class="focus__img">
          <h2 class="focus__title">Centrados en el cliente</h2>
          <p class="focus__description">
            Orientamos, asesoramos y guiamos al cliente hacia la obtención de un producto de valor para su negocio
          </p>
        </div>
        <div class="col-md-4 focus__column">
          <img src="{{ asset('img/icono-mejora-continua.png') }}" alt="Mejora continua" class="focus__img">
          <h2 class="focus__title">Mejora contínua</h2>
          <p class="focus__description">
            La mejora d elos procesos de desarrollo y la retroalimentación con el cliente nos conduce a productos de mayor calidad
          </p>
        </div>

        <div class="col-12 mt-5 text-center">
          <a href="#" class="btn btn-lg cesticom__btn cesticom__btn--blue">Ver servicios</a>
        </div>
      </div>
    </div>
  </section>

  {{--Clients--}}
  <section class="clients py-5">
    <div class="container">
      <h2 class="clients__title">Sea uno de nuestros clientes exitosos</h2>
      <h4 class="clients__subtitle">Con calidad y dedicación ayudamos a incrementar la productividad de sus empresas</h4>

      <div class="owl-carousel clients__carousel owl-theme">
        <div class="item">
          <img src="{{ asset('img/imagen-portafolio-1.jpg') }}" alt="Buy4App">
          <span class="clients__carousel__line"></span>
          <h5 class="clients__carousel__name">Buy4App</h5>
          <span class="d-block clients__carousel__description">Aplicación móvil</span>
        </div>
        <div class="item">
          <img src="{{ asset('img/imagen-portafolio-2.jpg') }}" alt="Camersur">
          <span class="clients__carousel__line"></span>
          <h5 class="clients__carousel__name">Plataforma Camersur</h5>
          <span class="d-block clients__carousel__description">Sistema web empresarial</span>
        </div>
        <div class="item">
          <img src="{{ asset('img/imagen-portafolio-3.jpg') }}" alt="CIGESI">
          <span class="clients__carousel__line"></span>
          <h5 class="clients__carousel__name">Plataforma CIGESI</h5>
          <span class="d-block clients__carousel__description">Web corporativa</span>
        </div>
        <div class="item"> Your Content </div>
        <div class="item"> Your Content </div>
        <div class="item"> Your Content </div>
        <div class="item"> Your Content </div>
      </div>

      <div class="row">
        <div class="col-12 mt-5 text-center">
          <a href="#" class="btn btn-lg cesticom__btn cesticom__btn--white">Ver portafolio</a>
        </div>
      </div>
    </div>
  </section>

  {{--Team--}}
  <section class="team py-5">
    <div class="container">
      <h2 class="team__title">Somos un equipo profesional</h2>
      <h4 class="team__subtitle">En constante capacitación y crecimiento para ofrecerle siempre lo mejor</h4>

      <div class="owl-carousel team__carousel owl-theme">
        <div class="item">
          <img src="{{ asset('img/foto-luis-acuna.png') }}" alt="">
          <h5 class="team__carousel__name">Luis Acuña Santaella</h5>
          <span class="d-block team__carousel__charge">Cargo en la empresa</span>
        </div>
        <div class="item">
          <img src="{{ asset('img/foto-carmen-gomez.png') }}" alt="">
          <h5 class="team__carousel__name">Carmen Gómez</h5>
          <span class="d-block team__carousel__charge">Cargo en la empresa</span>
        </div>
        <div class="item">
          <img src="{{ asset('img/foto-ramon-gorrin.png') }}" alt="">
          <h5 class="team__carousel__name">Ramón Gorrín</h5>
          <span class="d-block team__carousel__charge">Cargo en la empresa</span>
        </div>
        <div class="item">
          <img src="{{ asset('img/foto-erika-blanco.png') }}" alt="">
          <h5 class="team__carousel__name">Erika Blanco</h5>
          <span class="d-block team__carousel__charge">Cargo en la empresa</span>
        </div>
        <div class="item"> Your Content </div>
        <div class="item"> Your Content </div>
        <div class="item"> Your Content </div>
      </div>

      <div class="row">
        <div class="col-12 mt-5 text-center">
          <a href="#" class="btn btn-lg cesticom__btn cesticom__btn--blue">Conozca más</a>
        </div>
      </div>

    </div>
  </section>

@endsection

@section('script')
  <script src="{{ asset('js/assets/owl.carousel.min.js') }}"></script>
  <script>
    $(document).ready(function(){
      $('.owl-carousel.clients__carousel').owlCarousel({
        loop:true,
        margin:40,
        nav:true,
        navText : [
          "<img src='{{ asset("img/flecha-izquierda-blanca.svg") }}'>",
          "<img src='{{ asset("img/flecha-derecha-blanca.svg") }}'>"
        ],
        responsive:{
          0:{
            items:1
          },
          500:{
            items:2
          },
          1000:{
            items:3
          }
        }
      });

      // Carousel team
      $('.owl-carousel.team__carousel').owlCarousel({
        loop:true,
        margin:40,
        nav:true,
        navText : [
          "<img src='{{ asset("img/flecha-izquierda-azul.svg") }}'>",
          "<img src='{{ asset("img/flecha-derecha-azul.svg") }}'>"
        ],
        responsive:{
          0:{
            items:1
          },
          500:{
            items:2
          },
          1000:{
            items:4
          }
        }
      })
    });
  </script>
@endsection

