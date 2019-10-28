  <!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS . -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
  <title>Essencials</title>
  <style>
    .bg-home{
      background-image: url("imagen-mkt/textura02.jpg");
      background-repeat: repeat;

    }
  </style>
</head>


<body class="bg-home">
<header>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-success p-1 ">
    <a class="navbar-brand" href="#">
      <i class="fas fa-leaf"></i>
      Essencials</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-4 pr-md-5">
        <li class="nav-item active">
          <a class="nav-link" href="home.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#quienessomos">Nosotros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contacto</a>
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
          <i class="text-light fas fa-shopping-cart"></i>
          <i style ="color:white;" id="cart_n"></i>

        </a>
        <ul class="dropdown-menu">
          <li class="dropdown-item" href="producto.html">CREMAS</li>
          <li class="dropdown-item" href="producto.html">JABONES</li>
        </ul>
      </li>
      </ul>
    </div>
  </nav>
</header>
  <!--carousel-->
  <main>
  <section class="row">
    <div class="col">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>

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
  </section>

<!--final carouel-->

<!--SECCION DE  ANUNCIO DE Descuentos-->
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
  </main>

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
<main>
  <section class="container-fluid p-0 articulos-ecommerce">
    <div class="row px-1 m-md-3">


      <article class="col-10 mx-auto p-0 col-md-4 text-center my-3  border border-dark">
        <img src="imagen-mkt/cream-foto2.jpg" class="img-fluid" alt="">

        <section class= "articulos-ecommerce bg-white">
        <div class= "title-box py-5px">
          <h4>Crema aclarante</h4>
        </div>

        <div class= "row">
        <div class="col-md-12">
        <div class="product-top">

        <div class="overlay-right">


        <button type="button" class"btn btn-succes" title="Ver">
        <i class=" fa fa-eye "></i>
        </button>

        <button type="button" class"btn btn-succes" title="Me gusta">
        <i class="fa fa-heart"></i>
        </button>

        <button type="button" class"btn btn-succes" title="añadí al carrito">
        <i class=" fa fa-shopping-cart"></i>
        </button>

        </div>
        </div>

        <div class="product-bottom mt-md-3 pb-4 text-center">
        <i class="text-warning fa fa-star"></i>
        <i class="text-warning fa fa-star"></i>
        <i class="text-warning fa fa-star"></i>
        <i class="text-warning fa fa-star"></i>
        <i class="text-warning fa fa-star-half-alt"></i>

        <h5>$669</h5>
        <button type="button" class="btn btn-success">Comprar</button>


        </div>
        </div>

        </div>
        </section>

      </article>


      <article class="col-10 mx-auto p-0 col-md-4 text-center my-3  border border-dark">
        <img src="imagen-mkt/face-cream.jpg" class="img-fluid" alt="">

        <section class= "articulos-ecommerce bg-white">
        <div class= "title-box py-5px">
          <h4>Tónico facial</h4>
        </div>

        <div class= "row">
        <div class="col-md-12">
        <div class="product-top">

        <div class="overlay-right">


        <button type="button" class"btn btn-succes" title="Ver">
        <i class=" fa fa-eye "></i>
        </button>

        <button type="button" class"btn btn-succes" title="Me gusta">
        <i class="fa fa-heart"></i>
        </button>

        <button type="button" class"btn btn-succes" title="añadí al carrito">
        <i class=" fa fa-shopping-cart"></i>
        </button>

        </div>
        </div>

        <div class="product-bottom mt-md-3 pb-4  text-center">
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star-half-alt"></i>
        <h5>$669</h5>
        <button type="button" class="btn btn-success">Comprar</button>


        </div>
        </div>

        </div>
        </section>


      </article>

      <article class="col-10 mx-auto p-0 col-md-4 text-center my-3  border border-dark">
        <img src="imagen-mkt/slideshow/red-publicidad13.png" class="img-fluid" alt="">

        <section class= "articulos-ecommerce bg-white">
        <div class= "title-box py-5px">
          <h4>Anti arrugas</h4>
        </div>

        <div class= "row">
        <div class="col-md-12">
        <div class="product-top">

        <div class="overlay-right">


        <button type="button" class"btn btn-succes" title="Ver">
        <i class=" fa fa-eye "></i>
        </button>

        <button type="button" class"btn btn-succes" title="Me gusta">
        <i class="fa fa-heart"></i>
        </button>

        <button type="button" class"btn btn-succes" title="añadí al carrito">
        <i class=" fa fa-shopping-cart"></i>
        </button>

        </div>
        </div>

        <div class="product-bottom mt-md-3 pb-4 text-center">
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star-half-alt"></i>
        <h5>$669</h5>
        <button type="button" class="btn btn-success">Comprar</button>


        </div>
        </div>

        </div>
        </section>

      </article>

      <article class="col-10 mx-auto p-0 col-md-4 text-center my-3  border border-dark">
        <img src="imagen-mkt/soap-02.jpg" class="img-fluid" alt="">

        <section class= "articulos-ecommerce bg-white">
        <div class= "title-box py-5px">
          <h4>Jabón exfoliante</h4>
        </div>

        <div class= "row">
        <div class="col-md-12">
        <div class="product-top">

        <div class="overlay-right">


        <button type="button" class"btn btn-succes" title="Ver">
        <i class=" fa fa-eye "></i>
        </button>

        <button type="button" class"btn btn-succes" title="Me gusta">
        <i class="fa fa-heart"></i>
        </button>

        <button type="button" class"btn btn-succes" title="añadí al carrito">
        <i class=" fa fa-shopping-cart"></i>
        </button>

        </div>
        </div>

        <div class="product-bottom mt-md-3 pb-4 text-center">
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star-half-alt"></i>
        <h5>$669</h5>
        <button type="button" class="btn btn-success">Comprar</button>


        </div>
        </div>

        </div>
        </section>

      </article>

      <article class="col-10 mx-auto p-0 col-md-4 text-center my-3  border border-dark">
        <img src="imagen-mkt/soap-03.jpg" class="img-fluid" alt="">
        <section class= "articulos-ecommerce bg-white">
        <div class= "title-box py-5px">
          <h4>Jabón de avena</h4>
        </div>

        <div class= "row">
        <div class="col-md-12">
        <div class="product-top">

        <div class="overlay-right">


        <button type="button" class"btn btn-succes" title="Ver">
        <i class=" fa fa-eye "></i>
        </button>

        <button type="button" class"btn btn-succes" title="Me gusta">
        <i class="fa fa-heart"></i>
        </button>

        <button type="button" class"btn btn-succes" title="añadí al carrito">
        <i class=" fa fa-shopping-cart"></i>
        </button>

        </div>
        </div>

        <div class="product-bottom mt-md-3 pb-4 text-center">
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star-half-alt"></i>
        <h5>$669</h5>
        <button type="button" class="btn btn-success">Comprar</button>


        </div>
        </div>

        </div>
        </section>
      </article>

      <article class="col-10 mx-auto p-0 col-md-4 text-center my-3  border border-dark">
        <img src="imagen-mkt/publicidad11.jpg" class="img-fluid" alt="">
        <section class= "articulos-ecommerce bg-white">
        <div class= "title-box py-5px">
          <h4>Crema de día</h4>
        </div>

        <div class= "row">
        <div class="col-md-12">
        <div class="product-top">

        <div class="overlay-right">


        <button type="button" class"btn btn-succes" title="Ver">
        <i class=" fa fa-eye "></i>
        </button>

        <button type="button" class"btn btn-succes" title="Me gusta">
        <i class="fa fa-heart"></i>
        </button>

        <button type="button" class"btn btn-succes" title="añadí al carrito">
        <i class=" fa fa-shopping-cart"></i>
        </button>

        </div>
        </div>

        <div class="product-bottom mt-md-3 pb-4 text-center">
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star-half-alt"></i>
        <h5>$669</h5>
        <button type="button" class="btn btn-success">Comprar</button>


        </div>
        </div>

        </div>
        </section>
      </article>

      <article class="col-10 mx-auto p-0 col-md-4 text-center my-3  border border-dark">
        <img src="imagen-mkt/gel-ducha (2).jpg" class="img-fluid" alt="">
        <section class= "articulos-ecommerce">
          <section class= "articulos-ecommerce bg-white">
            <div class= "title-box py-5px">
              <h4>Crema para manos</h4>
            </div>

        <div class= "row">
        <div class="col-md-12">
        <div class="product-top">

        <div class="overlay-right">


        <button type="button" class"btn btn-succes" title="Ver">
        <i class=" fa fa-eye "></i>
        </button>

        <button type="button" class"btn btn-succes" title="Me gusta">
        <i class="fa fa-heart"></i>
        </button>

        <button type="button" class"btn btn-succes" title="añadí al carrito">
        <i class=" fa fa-shopping-cart"></i>
        </button>

        </div>
        </div>

        <div class="product-bottom mt-md-3 pb-4 text-center">
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star-half-alt"></i>
        <h5>$669</h5>
        <button type="button" class="btn btn-success">Comprar</button>


        </div>
        </div>

        </div>
        </section>

      </article>

      <article class="col-10 mx-auto p-0 col-md-4 text-center my-3  border border-dark">
        <img src="imagen-mkt/soap-04.jpg" class="img-fluid" alt="">
        <section class= "articulos-ecommerce bg-white">
        <div class= "title-box py-5px">
          <h4>Jabón de glicerina</h4>
        </div>

        <div class= "row">
        <div class="col-md-12">
        <div class="product-top">

        <div class="overlay-right">


        <button type="button" class"btn btn-succes" title="Ver">
        <i class=" fa fa-eye "></i>
        </button>

        <button type="button" class"btn btn-succes" title="Me gusta">
        <i class="fa fa-heart"></i>
        </button>

        <button type="button" class"btn btn-succes" title="añadí al carrito">
        <i class=" fa fa-shopping-cart"></i>
        </button>

        </div>
        </div>

        <div class="product-bottom mt-md-3 pb-4 text-center">
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star-half-alt"></i>
        <h5>$669</h5>
        <button type="button" class="btn btn-success">Comprar</button>


        </div>
        </div>

        </div>
        </section>
      </article>

      <article class="col-10 mx-auto p-0 col-md-4 text-center my-3  border border-dark">
        <img src="imagen-mkt/cream-foto4.jpg" class="img-fluid" alt="">
        <section class= "articulos-ecommerce bg-white">
        <div class= "title-box py-5px">
          <h4>Crema de cacao</h4>
        </div>

        <div class= "row">
        <div class="col-md-12">
        <div class="product-top">

        <div class="overlay-right">


        <button type="button" class"btn btn-succes" title="Ver">
        <i class=" fa fa-eye "></i>
        </button>

        <button type="button" class"btn btn-succes" title="Me gusta">
        <i class="fa fa-heart"></i>
        </button>

        <button type="button" class"btn btn-succes" title="añadí al carrito">
        <i class=" fa fa-shopping-cart"></i>
        </button>

        </div>
        </div>

        <div class="product-bottom mt-md-3 pb-4 text-center">
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star-half-alt"></i>
        <h5>$669</h5>
        <button type="button" class="btn btn-success">Comprar</button>


        </div>
        </div>

        </div>
        </section>
      </article>

      <article class="col-10 mx-auto p-0 col-md-4 text-center my-3  border border-dark">
        <img src="imagen-mkt/crema-natural02.jpg" class="img-fluid" alt="">
        <section class= "articulos-ecommerce bg-white">
        <div class= "title-box py-5px">
          <h4>Contorno de ojos</h4>
        </div>

        <div class= "row">
        <div class="col-md-12">
        <div class="product-top">

        <div class="overlay-right">


        <button type="button" class"btn btn-succes" title="Ver">
        <i class=" fa fa-eye "></i>
        </button>

        <button type="button" class"btn btn-succes" title="Me gusta">
        <i class="fa fa-heart"></i>
        </button>

        <button type="button" class"btn btn-succes" title="añadí al carrito">
        <i class=" fa fa-shopping-cart"></i>
        </button>

        </div>
        </div>

        <div class="product-bottom mt-md-3 pb-4 text-center">
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star-half-alt"></i>
        <h5>$669</h5>
        <button type="button" class="btn btn-success">Comprar</button>


        </div>
        </div>

        </div>
        </section>
      </article>

      <article class="col-10 mx-auto p-0 col-md-4 text-center my-3  border border-dark">
        <img src="imagen-mkt/producto3.jpg" class="img-fluid" alt="">
        <section class= "articulos-ecommerce bg-white">
        <div class= "title-box py-5px">
          <h4>Set de limpieza</h4>
        </div>

        <div class= "row">
        <div class="col-md-12">
        <div class="product-top">

        <div class="overlay-right">


        <button type="button" class"btn btn-succes" title="Ver">
        <i class=" fa fa-eye "></i>
        </button>

        <button type="button" class"btn btn-succes" title="Me gusta">
        <i class="fa fa-heart"></i>
        </button>

        <button type="button" class"btn btn-succes" title="añadí al carrito">
        <i class=" fa fa-shopping-cart"></i>
        </button>

        </div>
        </div>

        <div class="product-bottom mt-md-3 pb-4 text-center">
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star-half-alt"></i>
        <h5>$669</h5>
        <button type="button" class="btn btn-success">Comprar</button>


        </div>
        </div>

        </div>
        </section>
      </article>

      <article class="col-10 mx-auto p-0 col-md-4 text-center my-3  border border-dark">
        <img src="imagen-mkt/crema-natural03.jpg" class="img-fluid" alt="">
        <section class= "articulos-ecommerce bg-white">
        <div class= "title-box py-5px">
          <h4>Crema hidratante</h4>
        </div>

        <div class= "row">
        <div class="col-md-12">
        <div class="product-top">

        <div class="overlay-right">


        <button type="button" class"btn btn-succes" title="Ver">
        <i class=" fa fa-eye "></i>
        </button>

        <button type="button" class"btn btn-succes" title="Me gusta">
        <i class="fa fa-heart"></i>
        </button>

        <button type="button" class"btn btn-succes" title="añadí al carrito">
        <i class=" fa fa-shopping-cart"></i>
        </button>

        </div>
        </div>

        <div class="product-bottom mt-md-3 pb-4 text-center">
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star"></i>
          <i class="text-warning fa fa-star-half-alt"></i>
        <h5>$669</h5>
        <button type="button" class="btn btn-success">Comprar</button>


        </div>
        </div>

        </div>
        </section>
      </article>

    </div>
  </section>
  <!--finaliza LISTADO DE PRODUCTOS-->

  <div class="row my-5">
    <div class="col-12 col-6 text-center mx-md-auto">
      <a href="contacto.html" class="btn btn-success shadow">contanctanos</a>
    </div>
  </div>

</main>
  <!--finaliza LISTADO DE PRODUCTOS-->

<!--FOOTER-->
  <footer class="page-footer font-small blue pt-4">
    <div class="container-fluid text-center text-md-left">
      <div class="row">
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
  <!--fin de footer-->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
