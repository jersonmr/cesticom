@extends('layout.front')

@section('content')
  <section class="about">
    <div class="header">
      <img
          src="{{ asset('img/slider-nosotros-cesticom.jpg') }}"
          srcset="{{ asset('img/slider-nosotros-cesticom.jpg') }} 1200w,
                  {{ asset('img/slider-nosotros-cesticom-lg.jpg') }} 992w,
                  {{ asset('img/slider-nosotros-cesticom-md.jpg') }} 768w,
                  {{ asset('img/slider-nosotros-cesticom-sm.jpg') }} 500w"
          sizes="100vw" alt="Nosotros" class="header__img">
      <div class="text py-5">
        <h1 class="text__title">Nuestro compromiso</h1>
        <h4 class="text__subtitle">Texto complementario acerca del compromiso de la empresa con sus clientes</h4>
      </div>
    </div>

    {{--Quienes somos | Mision | Vision--}}
    <div class="mv py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="mv__title">¿Quiénes sómos?</h2>
            <p class="mv__description">
              Somos un equipo multi-disciplinario apasionado por  la investigación y desarrollo de soluciones empresariales personalizadas en el área de la tecnología y comunicación.
            </p>
          </div>
          <div class="col-md-4">
            <h2 class="mv__title">Misión</h2>
            <p class="mv__description">
              Transformar conocimientos en productos y servicios para  satisfacer los requerimientos de nuestros clientes con respuestas tecnológicas inteligentes, creativas e innovadoras.
            </p>
          </div>
          <div class="col-md-4">
            <h2 class="mv__title">Visión</h2>
            <p class="mv__description">
              Ser una empresa global líder en la prestación de servicios informáticos y de marketing digital, con énfasis en la creatividad, calidad e innovación.
            </p>
          </div>
        </div>
      </div>
    </div>

    {{--Team--}}
    <div class="team pb-5">
      <div class="container">
        <h2 class="team__title">Somos un equipo profesional</h2>
        <h4 class="team__subtitle">En constante capacitación y crecimiento para ofrecerle siempre lo mejor</h4>
        <employee></employee>
      </div>
    </div>
  </section>
@endsection