<?php
$compras = getAllData("compras");
$producto = getData("productos", $_POST["id"]);

echo "<code> <pre>";
var_dump($producto);
echo "</pre> </code>";
?>
