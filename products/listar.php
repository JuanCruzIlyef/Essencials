<?php

$productos = getAllData('productos');

// var_dump($productos);

?>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h1 class="display-4">Elegí tu producto</h1>
    <div class="row justify-content-center">
    </div>
  </div>
</div>

<div class="card-columns">
  <?php foreach ($productos as $posicion => $producto): ?>
    <div class="card">
      <!--aqui tra prodcto-->
      <img src="<?= $producto["imagen"] ?>" class="card-img-top" alt="<?= strtolower(trim($producto["nombre"])) ?>">
      <div class="card-body">
        <h5 class="card-title"><?= strtoupper(trim($producto["nombre"])) ?></h5>
        <form action="?action=mostrar" method="post">
          <input type="hidden" name="id" value="<?= $posicion ?>">
          <button type="submit" class="btn btn-outline-primary">
             Ver Descripcion
          </button>
        </form>
      </div>

    </div>
  <?php endforeach; ?>
</div>
