<!-- https://getbootstrap.com/docs/4.3/examples/checkout/ -->
<?php 
    require 'funciones/carrito.php';
?>
<div class="col-md-12">
    <ul class="list-group mb-3">
        <?php   
            $productos = productosCarrito('data/compras.json'); 
        ?>
        <?php foreach($productos as $producto): ?>
            <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                    <h6 class="my-0"><?=$producto["name"]?></h6>
                    <small><?=$producto["desc"]?></small>
                </div>
                <span class="text-success">USD <?=$producto["precio"]?></span>
            </li>
        <?php endforeach;?>

        <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$<?= totalCarrito($productos); ?></strong>
        </li>
    </ul>
    <!--  Moduficar para ir al checkout con la lista del carrito
        <form class="card p-2">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
            </div>
        </form> 
    -->
</div>