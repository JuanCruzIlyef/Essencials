<?php

require ("data.php");
 // foreach ($items as $index => $item){
 //   echo "<pre>";
 //   var_dump($item);
 //   echo "</pre>";
 // }
 // exit;
?>


<!--carousel-->
<section class="row">
  <div class="col">
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php foreach ($items as $index => $item): ?>
            <li data-target="#carouselExampleCaptions" data-slide-to="<?= $index ?>" class="<?= $index == 0 ? 'active': '' ?>"></li>
          <?php endforeach; ?>
        </ol>
        <div class="carousel-inner">

          <?php foreach ($items as $index => $item): ?>

          <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
            <img src= "<?= $item['image'] ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>

        <?php endforeach ;?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!--final carouel-->
