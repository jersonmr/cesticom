<footer class="footer pt-5">
  <div class="container pb-3">
    <div class="row">
      <div class="col-md-7 col-lg-9">
        <div class="footer__contact">
          <form action="#">
            <fieldset>
              <legend>Contáctenos</legend>
              <div class="row">
                <div class="col-12 col-lg-4">
                  <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre">
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="form-group">
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Teléfono">
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Mensaje"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group text-center">
                    <input type="submit" value="Enviar" class="btn btn-lg footer__btn">
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="col-md-5 col-lg-3">
        <div class="footer__info">
          <h3 class="footer__title">Sede principal</h3>
          <p>
            C.C. Marina Plaza, Edificio Tal Cosa, <br>
            Piso 1, Local XX <br>
            Cumaná, Estado Sucre, Venezuela
          </p>

          <h3 class="footer__title">Teléfonos</h3>
          <p>
            +58 41X XXX XXXX <br>
            +58 41X XXX XXXX <br>
            +58 41X XXX XXXX
          </p>

          <div class="footer__social">
            <a href="#" class="header__ribbon__social">
              <img src="{{ asset('img/icono-linkedin-cesticom-blanco.svg') }}" alt="LinkedIn">
            </a>
            <a href="#" class="header__ribbon__social">
              <img src="{{ asset('img/icono-facebook-cesticom-blanco.svg') }}" alt="Facebook">
            </a>
            <a href="#" class="header__ribbon__social">
              <img src="{{ asset('img/icono-twitter-cesticom-blanco.svg') }}" alt="Twitter">
            </a>
            <a href="#" class="header__ribbon__social">
              <img src="{{ asset('img/icono-instagram-cesticom-blanco.svg') }}" alt="Instagram">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__copyright py-3">
    <div class="container">
      <p>Desarrollado por CESTICOM &copy;</p>
    </div>
  </div>
</footer>