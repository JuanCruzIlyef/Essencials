<?php
if($_POST){
  include('functions/loginFuncion.php');
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
     <div class="row">
      <div class="col-12 col-md-6 mx-md-auto bg-success p-5 my-5">
        <h3 class="text-center text-light"><u>Ingresar<u></h3>
      </div>
     </div>
     <div class="row">
      <div class="col-12 col-md-6 mx-md-auto">
        <form class="Ingresar" action="login.php" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <p>
              <div class="col-12 col-md-6">
              <label for="email"></label>
              <input id="email"type="email" class="form-control" name="email" value="" placeholder="E-mail">
           </p>
            </div>
           <p>
            <div class="col-12 col-md-6">
              <label for="password"></label>
              <input id="password" class="form-control" type="password" name="password" value="" placeholder="Contraseña">
              <span><?php echo $errores["password"] ?></span>
           </p>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group mx-auto my-5">
              <button class="btn  btn-success" type="submit">
                Enviar
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
    <footer class="page-footer font-small blue pt-4">
        <?php  require ("modulos/footer.php"); ?>
    </footer>
    <?php require 'modulos/scripts.php'; ?>
  </body>
</html>
