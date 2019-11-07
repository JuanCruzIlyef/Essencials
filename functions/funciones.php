<?php

function validacion_login(array, $data){
if($_data){

  $json = file_get_contents('data.json');
  $usuarios = json_decode($json, true);
  $usuario = verificarUsuario($usuarios, $_data["email"], $_data["password"])

  if(!usuario){
    $error = "los datos son incorrectos";
}
else{
  $_SESSION["usuario"] = $usuario;
  header("Location:?action = perfil");
}
}
