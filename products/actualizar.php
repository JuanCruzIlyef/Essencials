<?php

$producto = getData("productos", $_POST["id"]);

?>

<form class="" action="?method=actualizar" method="post">
  <input type="hidden" name="id" value="<?= $producto["id"] ?>">

  <div class="form-group">
    <label for="Nombre"></label>
      <input type="text" class="form-control" value="<?= $producto["nombre"]?>">
    </div>
    <div class="form-group">
      <label for=""></label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for=""></label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for=""></label>
      <input type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-warning shadow btn-lg">Actualizar</button>
</form>
