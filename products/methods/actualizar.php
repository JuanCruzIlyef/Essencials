<?php
$productos = getAllData("productos");
$producto = getData("productos", $_POST["id"]);
// $productoModificado = updateData("productos",$_POST["id"],$_POST);
echo "<code> <pre>";
var_dump($producto);
echo "</pre> </code>";
?>
