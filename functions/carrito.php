<?php
function productosCarrito($json){
    $orden = file_get_contents($json);
    $array = json_decode($orden,true);
    $ultima = count($array) - 1;
    return $array[$ultima];
}
function totalCarrito($orden){
    $total = 0;
    foreach($orden as $producto){
        $total = $total + $producto["precio"];
    }
    return $total;
}

if($_POST){
    var_dump($_POST);
}


?>