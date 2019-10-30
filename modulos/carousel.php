<!--carousel-->
<section class="row">
  <div class="col">
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <!--
          Solo se nescesita un Solo li el resto se crea con un
          array asociativo y un foreach
          -->
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>

        </ol>
        <div class="carousel-inner">
          <!--
          Solo se nescesita un Solo un div con la clase carousel-item el resto se crea con un
          array asociativo y un foreach
          -->
          <div class="carousel-item active">
            <img src="imagen-mkt/slideshow/mini_publicidad.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Hidratá y regenerá tu piel</h5>
              <p> Texturas supremas para un cuidado sublime, con nuestras avanzadas cremas hidratantes y antiedad</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imagen-mkt/slideshow/mini_mini-woman-up.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagen-mkt/slideshow/mini_oferta02.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagen-mkt/slideshow/mini_publicidad12.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagen-mkt/slideshow/mini_publicidad13.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!--final carouel-->
