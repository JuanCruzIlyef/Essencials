<?php

$errores=[
  "email"=>"",
  "password"=>"",
];

if($_POST){

if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
     $errores["email"]= "El formato es incorrecto <br>";
}


if (is_numeric($_POST["password"]) < 8 ){
 $errores["password"]= "su contraseña debe tener 8 caracteres <br>";}
}


function verificar_usuario($usuarios, $email){
  foreach($usuarios as $usuario){
    if($usuario["email"] == $email){
      return true;
    }
  }
  return false;
}

?>
