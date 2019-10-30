<?php
if($_POST){
  include("validacion_php");
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <?php require ('modulos/head.php'); ?>
   <title>Home</title>
   <link rel="stylesheet" href="css/style.css">
 </head>
 <body class="bg-home">
 <header>
   <?php require ("modulos/navbar.php"); ?>
 </header>
<main class="container-fluid p-2 m-4" align="center">
    <h3>Ingresar</h3>
    <form class="Ingreso" action="login.php" method="post">
      <p>
        <label for="email"></label>
        <input id="email"type="email" name="email" value="" placeholder="E-mail">
      </p>
      <p>
        <label for="password"></label>
        <input id="password"type="password" name="password" value="" placeholder="Contraseña">
      </p>
      <div>
        <a href="#" class="olvido">
          <u>Olvidé mi contraseña<u>
        </a>
      </div>
      <br>
          <p>
        <input class="btn btn-success"type="submit" name="" value="Enviar">
      </p>

    </form>
    </main>
    <footer class="page-footer font-small blue pt-4">
        <?php  require ("modulos/footer.php"); ?>
    </footer>
    <?php require 'modulos/scripts.php'; ?>
  </body>
</html>
