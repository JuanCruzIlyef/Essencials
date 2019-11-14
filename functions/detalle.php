<?php

  function producto($id){
    $json= file_get_contents('../data/productos.json');
    $productos = json_decode($json,true);
    foreach ($productos as $producto){
      if ($producto["id"] == $id) {
        return $producto;
      }
    }
    return "No se encontro producto";
  }

if($_POST){
// echo "<pre>";
$producto = producto($_POST["producto"]);
// echo "</pre>";
}
?>
<?php if (count($producto) > 0): ?>
  <h1><?= $producto["nombre"] ?></h1>
  <img src="<?= $producto["imagen"] ?>" alt="<?= $producto["nombre"] ?>">
<?php endif; ?>
