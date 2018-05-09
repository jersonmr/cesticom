@extends('layout.front')

@section('content')
  <div class="services">
    <header class="services__header py-5">
      <h2 class="services__title">Nuestros servicios</h2>
      <p class="services__subtitle">Acompañamos el emprendimiento y transitamos el camino tecnológico junto a nuestros clientes</p>
    </header>

    <section class="services__list pt-5">
      <div class="container">
        <article class="services__item">
          <img src="{{ asset('img/services/icono-cesticom-modelado-de-negocios.svg') }}" alt="" class="services__img">
          <h4 class="services__name">Modelado de negocios</h4>
          <p class="services__description">
            Te acompañamos en el proceso de idear tu marca o producto de forma creativa
          </p>
          <a href="" class="btn cesticom__btn cesticom__btn--blue cesticom__btn cesticom__btn--blue--blue">Conozca más</a>
        </article>

        <article class="services__item">
          <img src="{{ asset('img/services/icono-cesticom-paginas-web-corporativas.svg') }}" alt="" class="services__img">
          <h4 class="services__name">Páginas web corporativas</h4>
          <p class="services__description">
            Creamos el sitio web profesional que dará a conocer tu marca con el público
          </p>
          <a href="" class="btn cesticom__btn cesticom__btn--blue">Conozca más</a>
        </article>

        <article class="services__item">
          <img src="{{ asset('img/services/icono-cesticom-ecommerce.svg') }}" alt="" class="services__img">
          <h4 class="services__name">E-Commerce</h4>
          <p class="services__description">
            Desarrollamos sistemas de comercio electrónico para potenciar la venta de tus productos y/o servicios
          </p>
          <a href="" class="btn cesticom__btn cesticom__btn--blue">Conozca más</a>
        </article>

        <article class="services__item">
          <img src="{{ asset('img/services/icono-cesticom-desarrollo movil.svg') }}" alt="" class="services__img">
          <h4 class="services__name">Desarrollo móvil</h4>
          <p class="services__description">
            Creamos aplicaciones móviles que derivan en grandes oportunidades para tu negocio
          </p>
          <a href="" class="btn cesticom__btn cesticom__btn--blue">Conozca más</a>
        </article>

        <article class="services__item">
          <img src="{{ asset('img/services/icono-cesticom-sistemas-cientificos.svg') }}" alt="" class="services__img">
          <h4 class="services__name">Sistemas científicos</h4>
          <p class="services__description">
            Ofrecemos el desarrollo de sistemas multipropósito par ael ámbito científico
          </p>
          <a href="" class="btn cesticom__btn cesticom__btn--blue">Conozca más</a>
        </article>

        <article class="services__item">
          <img src="{{ asset('img/services/icono-cesticom-gestion-de-servidores.svg') }}" alt="" class="services__img">
          <h4 class="services__name">Gestión de servidores</h4>
          <p class="services__description">
            Proveemos de servicio de instalación de hostings (VPS) y mantenimiento de las intalaciones web
          </p>
          <a href="" class="btn cesticom__btn cesticom__btn--blue">Conozca más</a>
        </article>

        <article class="services__item">
          <img src="{{ asset('img/services/icono-cesticom-marketing-digital.svg') }}" alt="" class="services__img">
          <h4 class="services__name">Marketing digital</h4>
          <p class="services__description">
            Posicionamos la marca de su empresa, haciéndola visible en las redes sociales
          </p>
          <a href="" class="btn cesticom__btn cesticom__btn--blue">Conozca más</a>
        </article>

        <article class="services__item">
          <img src="{{ asset('img/services/icono-cesticom-consultoria.svg') }}" alt="" class="services__img">
          <h4 class="services__name">Consultoría</h4>
          <p class="services__description">
            Somos expertos en asesorarle y acompañarle en la administración y desarrollo de las plataformas TIC para su empresa
          </p>
          <a href="" class="btn cesticom__btn cesticom__btn--blue">Conozca más</a>
        </article>
      </div>
    </section>
  </div>
@endsection