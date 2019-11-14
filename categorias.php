<?php if(isset($_GET["categoria"]) && $_GET["categoria"] != "otros" && strlen($_GET["categoria"]) > 0  ):?>

<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading"><?= strtoupper($_GET["categoria"]) ?></h1>
  </div>
</section>

<div class="container">
  <div class="row justify-content-around">

    <!--
          
        -->
    <?php
      $json= file_get_contents('data/productos.json');

      $productos = json_decode($json,true);
    ?>
    <?php  foreach ($productos as $producto):?>
    <?php if($producto['categoria'] === $_GET['categoria']) : ?>


      <!-- Inicio de Producto -->
      <div class="card mb-4 shadow-sm col-12 col-md-4 p-0">
        <img class="card-img-top" width="100%" src="<?= $producto['imagen'] ?>" />
        <div class="card-body">
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <form action="funciones/detalle.php" method="post">
                <input type="hidden" name="producto" value="<?=$producto['id'] ?>">
                <button type="submit" class="btn btn-sm btn-outline-secondary">Detalle</button>



              </form>
              <form action="funciones/carrito.php" method="post">
                <input type="hidden" name="producto" value="0">
                <button type="submit" class="btn btn-sm btn-outline-secondary">Agregar</button>
              </form>
            </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    <!-- Fin de Producto -->
  <?php endif; ?>
  <?php endforeach;?>
</div>
</div>

<?php else :?>
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Nuestros Productos</h1>
  </div>
</section>
<div class="container">
  <div class="row justify-content-around">


    <?php
      $json= file_get_contents('data/productos.json');

      $productos = json_decode($json,true);
    ?>
    <?php  foreach ($productos as $producto):?>

      <!-- Inicio de Producto -->
      <div class="card mb-4 shadow-sm col-12 col-md-4 p-0">
        <img class="card-img-top" width="100%" src="https://placehold.co/480x320/random/random/png" />
        <div class="card-body">
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <form action="funciones/detalle.php" method="post">
                <input type="hidden" name="producto" value="<?=$producto["id"]?>">
                <button type="submit" class="btn btn-sm btn-outline-secondary">Detalle</button>
              </form>
              <form action="funciones/carrito.php" method="post">
                <input type="hidden" name="producto" value="0">
                <button type="submit" class="btn btn-sm btn-outline-secondary">Agregar</button>
              </form>
            </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    <!-- Fin de Producto -->
  <?php endforeach;?>
</div>
  </div>
</div>
<?php endif; ?>
