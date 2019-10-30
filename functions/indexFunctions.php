
<?php

function validar_datos_de_registro(array $data){
  $errors = [];

  if ($data){
    if(strlen($data["Nombre"])== 0){
      $errors['Nombre'] = "¿Te has olvidado como te llamas?";
    }
    if(!filter_var($data["email"], FILTER_VALIDATE_EMAIL)){
      $errors['email'] = "El email no es valido";
    }
    if(strlen($data["email"])== 0){
      $errors['email'] = "Por favor escribi el email";
    }
    if($data["password"] != $data["password_confirmation"]){
      $errors["password_confirmation"] = "El password no coincide";
    }
    if(strlen($data["password"]) == 0){
      $errors['password'] = "¿Se te olvido escribir la contraseña?";
    }
  }


  return $errors;
}
