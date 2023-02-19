<?php

#Lo siguiente es un casting en PHP

$numerito_string = "10";

$numerito_int = (int) $numerito_string; //se hace el casting

var_dump($numerito_int);

echo "<br>";

//Fácil

$nombre = "Carlos";
$apellido = "JIménez";
$edad = 37;
$aprobado = true;

//Medio

$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
$nombre_completo = $nombre . " " . $apellido;
$presento_examen = (bool) 1;

//Avanzado

$numero_preguntas = 5 + "5";
$numero_respuestas = "5" + 5;
$promedio_maximo = $numero_respuestas / 1.0;
$michis = 3 + "5 michis";

echo $michis;
