<?php

echo "Hola Carlos. Primera línea de código en PHP <br>"; //Estoy programando con PHP línea comentada

$nombre = "Carlos";
$apellido = "Jiménez";

echo "Mi nombre es " . $nombre . " y mi apellido es " . $apellido . "<br>";

$personas = [
	"Carlos" => 37,
	"Michi" => 15,
	"Juan" => 65
];


var_dump($personas);

echo "<br>";

print_r($personas);
