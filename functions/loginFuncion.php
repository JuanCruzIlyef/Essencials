<?php
if($_POST){

if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
  echo "El mail no tiene el formato correcto";
}

if (is_numeric($_POST["contraseña"]) == false){
  echo "la contraseña ingresada es incorrecta";
}

}

?>
