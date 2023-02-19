<?php

echo "<h1>if and else</h1>";

$asientosDisponibles = 0;
$esHijo = false;
$conoce = false;

if ($asientosDisponibles > 1 ){
    echo "Puedes observar la película sentado";
}
elseif ($esHijo == true){
    echo "No te creo, pero puedes ver la película";
}
elseif ($conoce == true){
    echo "esta bien, adelante";
}
else {
    echo "Lo sentimos, no hay puestos disponibles";
}