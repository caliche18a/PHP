<?php

echo "<h1>Ciclo do while</h1>";

$contador = 1;
do {
    echo "Estas en la iteración $contador <br>";
    $contador++;
} while ($contador <= 10);

echo "<br>";

$users = ["caliche","yuliana","mariana","jose"];
do {
    $user = readline("Por favor, ingrese tu nombre de usuario: ");

    echo "\n";


} while ( in_array($user,$users));



echo "\n";

