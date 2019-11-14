<?php

if (!isset($_POST["id"])) {
  header("Location:../Products/");
  die();
}

$producto = getData("productos", $_POST["id"]);
// echo "<code> <pre>";
// var_dump($producto);
// echo "</pre> </code>";

?>

<!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">
    <?= strtoupper(trim($producto["nombre"])) ?>
    <small><span class="badge badge-success"><?= $producto["categoria"]?></span></small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="<?= $producto["imagen"] ?>" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Descripcion</h3>
      <p><?= strtolower(trim($producto["descripcion"])) ?></p>
      <h3 class="my-3">Mineral Complex</h3>
      <ul class="list-group">
        <li class="list-group-item">Precio : <?=$producto["precio"]?></li>
        <li class="list-group-item">Ranking : <?=$producto["puntaje"]?></li>
        <li class="list-group-item d-flex justify-content-start">

          <form class=" mr-3" action="?method=comprar" method="post">
            <input type="hidden" name="id" value="<?= $producto["id"]?>">
            <button type="submit" class="btn btn-outline-success btn-lg shadow">
              <i class="fas fa-shopping-cart"></i>
            </button>
          </form>

          <form class="mr-3" action="?method=favorito" method="post">
            <input type="hidden" name="id" value="<?= $producto["id"]?>">
            <button type="submit" class="btn btn-outline-danger btn-lg shadow">
              <i class="fas fa-heart"></i>
            </button>
          </form>

          <form class="mr-3" action="?action=actualizar" method="post">
            <input type="hidden" name="id" value="<?= $producto["id"]?>">
            <button type="submit" class="btn btn-outline-warning btn-lg shadow">
              <i class="fas fa-pen"></i>
            </button>
          </form>

          <form class="" action="?action=borrar" method="post">
            <input type="hidden" name="id" value="<?= $producto["id"]?>">
            <button type="submit" class="btn btn-outline-danger btn-lg shadow">
              <i class="fas fa-trash"></i>
            </button>
          </form>

        </li>
      </ul>
    </div>

  </div>
  <!-- /.row -->
</div>
