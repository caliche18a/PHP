<?php

#Arreglos asociativos

echo "<h2>Arreglos asociativos (listas)</h2>";

$edades = array(
    "Carlos"        => 37,
    "Yuliana"       => 35,
    "Andrés"        => 30,
    "Manuela"       => 29,
);

echo "La edad de Carlos es " . $edades["Carlos"];

echo "<br>";

$cafes = array(
    "Capucchino"        => 2000,
    "Latte"             => 1500,
    "Americano"         => 4900,
);

echo "El precio del café Americano es " . $cafes["Americano"];


echo "<br>";
echo "<br>";
echo "<br>";


$personas = array(
    "Carlos"            => array(
        "edad"              => 37,
        "universidad"       => "Politécnico Grancolombiano",
        "apellido"          => "Jiménez",
    ),

    "Yuliana"           =>array(
        "edad"              => 34,
        "universidad"       => "Universidad de Antioquia",
        "apellido"          => "Ruiz",
    ),
);

echo "La información de Yuliana es <br>  
 EDAD: " . $personas["Yuliana"]["edad"] . " APELLIDO: " .$personas["Yuliana"]["apellido"] .
    " UNIVERSIDAD " . $personas["Yuliana"]["universidad"];


echo "<br>";
echo "<br>";
echo "<br>";


echo "La información de Carlos es <br>  
 APELLIDO: " . $personas["Carlos"]["apellido"] . " EDAD: " .$personas["Carlos"]["edad"] .
    " UNIVERSIDAD " . $personas["Carlos"]["universidad"];