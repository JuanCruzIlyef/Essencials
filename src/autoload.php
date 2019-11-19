<?php

spl_autoload_register(function ($class)) {

  require $class . ".php";
};

 ?>


<!-- Esto debería ir en el index.php de la siguiente forma: -->

<!-- require "src/autoload.php"; -->

<!-- Haría que el require de user en register.php se pueda sacar, y de esta forma nunca mas pensamos en un require de CLASES -->

<!-- Todo lo que sea CLASES, dentro de la carpeta SRC. El autoload es un require SOLO PARA CLASES -->
