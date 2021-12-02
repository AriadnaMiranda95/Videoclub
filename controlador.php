<?php

include_once "WebPelis.php";

$peliculas = new Videoclub();

if(empty($_GET)){
    $peliculas->obtenerPeliculas();
}


?>