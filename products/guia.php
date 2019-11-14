<?php

function getAllData($json)
{
  $archivo = file_get_contents("../data/$json.json");
  return json_decode($archivo,true);
}

function getData($json,$id)
{
  $archivo = file_get_contents("../data/$json.json");
  $listado = json_decode($archivo,true);
  foreach ($listado as $posicion => $item) {
    if($posicion == $id || $item["nombre"] == $id || $item["id"] == $id ){
      return $item ;
    }
  }
  return false;
}

function updateData($json,$id,$data)
{
  $archivo = file_get_contents("../data/$json.json");
  $listado = json_decode($archivo,true);
  foreach ($listado as $posicion => $item) {
    if($posicion == $id || $item["nombre"] == $id ){
      $item = $data;
      $archivoNuevo = json_encode($listado,JSON_PRETTY_PRINT);
      file_put_contents("../data/$json.json", $archivoNuevo);
      return true;
    }
  }
  return false;
}


?>
