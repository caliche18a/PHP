<?php

/*
1--->1
2--->1
3--->2
4--->3
5--->5
6--->8
7--->13
8--->21


La sucesión de Finonacci

*/

$numeroTienda = 25;

$anterior = 0;

$actual = 1;

for ($i=2; $i <= $numeroTienda ; $i++) { 

    $temporal = $actual;
    
    $actual += $anterior;

    $anterior = $temporal;

    //echo $actual . "<br>";

}

echo "Hay $actual formas distintas de llegar a la tienda #$numeroTienda </br>";