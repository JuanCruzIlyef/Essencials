<?php
require ('functions/indexFunctions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php require ('modulos/head.php'); ?>
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-home">
<header>
  <?php require ("modulos/navbar.php"); ?>
</header>
<main>
<?php require ("modulos/main.php"); ?>
</main>
<footer class="page-footer font-small blue pt-4">
    <?php  require ("modulos/footer.php"); ?>
</footer>
<?php require 'modulos/scripts.php'; ?>
</body>
</html>
