
<?php

function validar_datos_de_registro(array $data){
  $errors = [];


  if ($data){
    if(strlen($data["Nombre"])== 0){
      $errors['Nombre'] = "El nombre no se completo";
    }
    if(!filter_var($data["email"], FILTER_VALIDATE_EMAIL)){
      $errors['email'] = "El email no es valido";
    }
    if($data["password"] == $data["password_confirmation"]){
      $errors["password_comfirmation"] = "El password no coincide";
    }
  }

  return $errors;
}
