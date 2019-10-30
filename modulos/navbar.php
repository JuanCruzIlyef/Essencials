<!--
Solo se nescesita un Solo li el resto se crea con un
array asociativo y un foreach dentro de la ul
-->
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
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#quienessomos">Nosotros</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faq.php">Preguntas frecuentes</a>
      </li>
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
         Usuarios
       </a>
       <div class="dropdown-menu">
         <a class="dropdown-item" href="login.php">Ingresar</a>
         <a class="dropdown-item" href="registro.php">Registrarse</a>
       </div>
     </li>
    </ul>
  </div>
</nav>
