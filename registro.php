

<?php
if($_POST){
  require 'functions\indexFunctions.php';
  $errors = validar_datos_de_registro($_POST);
  if(count($errors) == 0){
      $usuario = [
      'email'=> $_POST['email'],
      'password'=> password_hash($_POST['password'], PASSWORD_DEFAULT),
    ];
    //primero leo el archivo
    $json = file_get_contents('usuarios.json');
    //convierto el json a un array de php. el true es para que me devuelva string
    $usuarios = json_decode($json, true);
    //en el array agregamos el usuario, lo pusheo
    $usuarios[]= $usuario;
    //lo transformo en un json nuevamente
    $json = json_encode($usuarios, JSON_PRETTY_PRINT);
    //guardamos en el archivo la informacion, nombres de archivo y que datos voy a escribir
    file_put_contents('usuarios.json', $json);

    header("location:login.php?msg=BIENVENIDO");
  }
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
<!--Registro-->
<main class="container-fluid p-4 m-8">

  <div class="row">
    <div class="col-12 col-md-6 mx-md-auto bg-success p-5 my-5">
      <h3 class="text-center text-light"><u>Registrarse<u></h3>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-md-6 mx-md-auto p-0">
        <form action="registro.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input class="form-control" id="Nombre" type="text" name="Nombre" value="<?= $_POST["Nombre"] ?? null  ?>" placeholder="Nombre">
            <?php if(isset($errors["Nombre"])) : ?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong><?= $errors["Nombre"] ?></strong>
               </div>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <input class="form-control" id="email"type="email" name="email" value="<?= $_POST["email"] ?? null  ?>" placeholder="E-mail">
            <?php if(isset($errors["email"])) : ?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong><?= $errors["email"] ?></strong>
               </div>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <input class="form-control" id="password"type="password" name="password" value="" placeholder="Contraseña">
            <?php if(isset($errors["password"])) : ?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong><?= $errors["password"] ?></strong>
               </div>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <input class="form-control" id="password" type="password" name="password_confirmation" value="" placeholder="Confirmar contraseña">
            <?php if(isset($errors["password_confirmation"])) : ?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong><?= $errors["password_confirmation"] ?></strong>
               </div>
            <?php endif; ?>
          </div>
          <div class="form-row">
            <div class="form-group mx-auto">
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
