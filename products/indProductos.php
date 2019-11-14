<?php
  // session_start();
  require "guia.php";
  if(isset($_GET['method'])){
    require "../Products/methods/".$_GET['method'].".php";
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../librerias/bootstrap.min.css">

    <!-- Fontawesom CSS -->
    <link rel="stylesheet" href="../librerias/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="css/main.css">

    <title>Essencials</title>
  </head>
  <body>

    <?php if(isset($_GET['mensaje'])):?>
        <div class="alert alert-light" role="alert">
            <?= $_GET['mensaje'] ?>
        </div>
    <?php endif;?>

    <?php if(isset($_GET['action'])):?>
        <?php require $_GET['action'].".php";?>
    <?php else:?>
        <?php require "listar.php";?>
    <?php endif;?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../librerias/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../librerias/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../librerias/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
