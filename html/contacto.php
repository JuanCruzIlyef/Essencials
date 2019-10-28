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
      </div>
      </div>

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
