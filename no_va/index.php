<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <title>Essencials</title>
 <link rel="stylesheet" href="css/style.css">
 <style>
  .bg-home{
    background-color: rgba(200,250,45.1);
  }
 </style>
</head>

<body class="container bg-home">

<!-- NAVBAR START -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-success p-1">
    <a class="navbar-brand" href="home.html">Essencials</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0 pr-md-5">
        <li class="nav-item active">
          <a class="nav-link" href="home.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.html#quienessomos">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.html#contactanos">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.html">Preguntas frecuentes</a>
        </li>
        <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
           Usuarios
         </a>
         <div class="dropdown-menu">
           <a class="dropdown-item" href="login.html">Ingresar</a>
           <a class="dropdown-item" href="registro.html">Registrarse</a>
         </div>
       </li>
       <li class="nav-item dropdown mr-md-5">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-shopping-cart"></i>
        </a>
        <ul class="dropdown-menu">
          <li class="dropdown-item" href="producto.html">CREMAS</li>
          <li class="dropdown-item" href="producto.html">JABONES</li>
        </ul>
      </li>
      </ul>
    </div>
  </nav>

  <!--Carousel-->
  <div class="row">
    <div class="col">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
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
  </div>

<!--SECCION DE  ANUNCIO DE Descuentos-->
<main>
  <section class="row">
    <div class="col-12 my-md-4">
      <div class="row">
        <figure class=" d-inline-block p-0 m-0 col-md-4 text-center">
          <img src="imagen-mkt/jasmin-34floedit.jpg" alt="" class="img-thumbnail w-75 rounded-circle">
        </figure>
        <figure class=" d-inline-block p-0 m-0 col-md-4 text-center">
          <img src="imagen-mkt/fruits-223tedit.jpg" alt="" class="img-thumbnail w-75 rounded-circle">
        </figure>
        <figure class=" d-inline-block p-0 m-0 col-md-4 text-center">
          <img src="imagen-mkt/bamboo-82edit.jpg" alt="" class="img-thumbnail w-75 rounded-circle">
        </figure>
      </div>
    </div>

<!--FINAL SECCION DE  ANUNCIO DE Descuentos-->

<!--JUMBOTRON-->
    <div class="col-12 mt-5" id="about_us" >
      <div class="jumbotron" id="quienessomos">
        <h1 class="display-4">Bienvenido a Essencials!</h1>
        <p class="lead">Nuestra finalidad es crear cosméticos naturales, con materias primas seleccionadas, de eficacia comprobada, buscando mantener y potencias sus cualidades y beneficios. <br>
          Utilizamos aceites esenciales puros, por sus exquisitos aromas y propiedades.</p>
        <hr class="my-4">
        <p>No testeamos en animales.</p>

      </div>
    </div>
  </section>
<!--FINAL JUMBOTRON-->

  <!--imagenes de producto-->

  <section class="container-fluid p-0 articulos-ecommerce">
    <div class="row px-1">
      <article class="col-12 col-md-4 text-center my-3 bg-light pt-3 py-3  ">
        <img src="imagen-mkt/cream-foto2.jpg" class="img-fluid" alt="">

        <h4>Crema aclarante</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-success">Comprar</button>

      </article>


      <article class="col-12 col-md-4 text-center my-3 bg-light pt-3 py-3 ">
        <img src="imagen-mkt/face-cream.jpg" class="img-fluid" alt="">

        <h4>Tónico facial</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-success">Comprar</button>

      </article>

      <article class="col-12 col-md-4 text-center my-3 bg-light pt-3 py-3 ">
        <img src="imagen-mkt/slideshow/red-publicidad13.png" class="img-fluid" alt="">

        <h4>Anti arrugas</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-success">Comprar</button>

      </article>

      <article class="col-12 col-md-4 text-center my-3 bg-light pt-3 py-3 ">
        <img src="imagen-mkt/soap-02.jpg" class="img-fluid" alt="">

        <h4>Jabón exfoliante</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-success">Comprar</button>

      </article>

      <article class="col-12 col-md-4 text-center my-3 bg-light pt-3 py-3 ">
        <img src="imagen-mkt/soap-03.jpg" class="img-fluid" alt="">
        <h4>Jabón de avena</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-success">Comprar</button>
      </article>
      <article class="col-12 col-md-4 text-center my-3 bg-light pt-3 py-3 ">
        <img src="imagen-mkt/publicidad11.jpg" class="img-fluid" alt="">
        <h4>Crema de día</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-success">Comprar</button>
      </article>
      <article class="col-12 col-md-4 text-center my-3 bg-light pt-3 py-3 ">
        <img src="imagen-mkt/gel-ducha (2).jpg" class="img-fluid" alt="">
        <h4>Crema de manos</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-success">Comprar</button>
      </article>
      <article class="col-12 col-md-4 text-center my-3 bg-light pt-3 py-3 ">
        <img src="imagen-mkt/soap-04.jpg" class="img-fluid" alt="">
        <h4>Jabón de glicerina</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-success">Comprar</button>
      </article>
      <article class="col-12 col-md-4 text-center my-3 bg-light pt-3 py-3 ">
        <img src="imagen-mkt/cream-foto4.jpg" class="img-fluid" alt="">
        <h4>Crema de cacao</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-success">Comprar</button>
      </article>
      <article class="col-12 col-md-4 text-center my-3 bg-light pt-3 py-3 ">
        <img src="imagen-mkt/crema-natural02.jpg" class="img-fluid" alt="">
        <h4>Contorno de ojos</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-success">Comprar</button>
      </article>
      <article class="col-12 col-md-4 text-center my-3 bg-light pt-3 py-3 ">
        <img src="imagen-mkt/producto3.jpg" class="img-fluid" alt="">
        <h4>Set de limpieza</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-success">Comprar</button>
      </article>
      <article class="col-12 col-md-4 text-center my-3 bg-light pt-3 py-3 ">
        <img src="imagen-mkt/crema-natural03.jpg" class="img-fluid" alt="">
        <h4>Crema hidratante</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-success">Comprar</button>
      </article>

    </div>
  </section>

  <!--finaliza LISTADO DE PRODUCTOS-->


</main>
  <!--finaliza LISTADO DE PRODUCTOS-->

<!--FOOTER-->
<footer class="page-footer font-small blue pt-4">
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-12 mt-md-0 mt-3" id="contactanos">
        <h4><u>Contactanos</u></h4>
        <p>Envianos tu mensaje. Queremos saber de vos.</p>
        <form action="#" method="post">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <label for="Nombre"></label>
              <input type="text" name="Nombre" id="Nombre" value="" placeholder="Nombre">
            </div>
            <div class="col-lg-12 col-md-12">
              <label for="email"></label>
              <input type="email" name="Email" id="Email" value="" placeholder="E-mail">
            </div>
            <div class="col-lg-12 col-md-12">
              <label for="Telefono"></label>
              <input type="tel" name="Telefono" id="Telefono" value="" placeholder="Teléfono">
            </div>
            <div class="col-lg-12 col-md-12">
              <label for="Asunto"></label>
              <input type="text" name="Asunto" id="Asunto" value="" placeholder="Asunto">
            </div>
            <div class="col-lg-12 col-md-12">
              <label for="Mensaje"></label>
              <textarea name="Mensaje" rows="8" cols="80" placeholder="Comentarios"></textarea>
            </div>
            <div class="col-lg-12 col-md-12">
              <input type="submit" name="" id="" value="Enviar">
            </div>
          </div>
        </form>
        <br><br>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-6 mb-md-0 mb-6">
        <h5 class:"links"><u>Links</u></h5>
        <ul class="links">
          <li>
            <a href="#quienessomos">Nosotros</a>
          </li>
          <li>
            <a href="faq.html">Preguntas frecuentes</a>
          </li>
          <li>
            <a href="login.html">Ingresar</a>
          </li>
          <li>
            <a href="registro.html">Registrarse</a>
          </li>
        </ul>
      </div>
      <div class="col-md-6 mb-md-0 mb-6">
        <h5><u>Nuestras redes</u></h5>
        <ul class="redes">
          <li>
            <a href="https://www.facebook.com"><i class="fab fa-facebook-f fa-lg white mr-md-3 mr-3 fa-1.5x"> </i></a>
          </li>
          <li>
            <a href="https://www.twitter.com"><i class="fab fa-twitter fa-lg white mr-md-3 mr-3 fa-1.5x"> </i></a>
          </li>
          <li>
            <a href="https://www.instagram.com"><i class="fab fa-instagram fa-lg white mr-md-3 mr-3 fa-1.5x"> </i></a>
          </li>
          <li>
            <a href="https://www.web.whatsapp.com"><i class="fab fa-whatsapp fa-lg white mr-md-3 mr-3 fa-1.5x"> </i></a>
          </li>
        </ul>
      </div>
    </div>
   </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</div>
</body>

</html>