<?php

$tienda = array(
    "Americano" => 20,
    "Lattle" => 25,
    "Capucchino" => 27.5,
    "Mocca" => 24
 );

 foreach ($tienda as $cafe => $price ) {
    echo "El café $cafe cuesta $$price USD <br>";
 }


 echo "<br>";


 foreach ($tienda as $cafe => $price ) {
    if ($cafe == "Lattle") {
        echo "Encontré al cafe $cafe <br>";
        break;
    }
 }




