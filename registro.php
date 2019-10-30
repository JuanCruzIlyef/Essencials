

<?php
require ("functions/indexFunctions.php");

if($_POST){
  $errors = validar_datos_de_registro($_POST);
if(!count($errors) == 0){
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
  header("location:login.php? BIENVENIDO");
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
    <h3><u>Registrarse<u></h3>
    <form class="Registrarse" action="registro.php" method="post" enctype="multipart/form-data">
      <p class="col-lg-6 col-md-12">
        <label for="Nombre"></label>
        <input id="Nombre" type="text" name="Nombre" value="" placeholder="Nombre">
      </p>
      <p class="col-lg-6 col-md-12">
        <label for="email"></label>
        <input id="email"type="email" name="email" value="" placeholder="E-mail">
      </p>
      <p class="col-lg-6 col-md-12">
        <label for="password"></label>
        <input id="password"type="password" name="password" value="" placeholder="Contraseña">
      </p>
      <p class="col-lg-6 col-md-12">
        <label for="password"></label class="">
        <input id="password"type="password" name="password_confirmation" value="" placeholder="Confirmar contraseña">
      </p>
        <p class="col-lg-2 col-md-12">
        <input class="btn btn-success" type="submit" name="" value="Enviar" id="boton">
      </p>

    </main>
    <footer class="page-footer font-small blue pt-4">
        <?php  require ("modulos/footer.php"); ?>
    </footer>
    <?php require 'modulos/scripts.php'; ?>
  </body>
</html>
