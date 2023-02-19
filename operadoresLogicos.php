<?php
echo "<h1>Operadores Lógicos</h1>";
$michisFelinos = true;
$michis4Patas = true;
$michisVuelan = false;
$michisPrograman = false;

var_dump($michisFelinos && $michis4Patas); //true

echo "<br>";

var_dump($michisPrograman && $michisFelinos);//false

echo "<br>";

var_dump($michisPrograman || $michisVuelan); //false

echo "<br>";

var_dump($michisPrograman || $michisFelinos); //true

echo "<br>";

var_dump(!$michisPrograman && !$michisFelinos); //false

echo "<br>";

$resultado = $michis4Patas && $michisPrograman;

var_dump($resultado); //false

echo "<h2>Ejercicios</h2>";

$es_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

//AND
var_dump($es_michi_grande && $le_gusta_comer);//true

echo "<br>";
//OR
var_dump($es_michi_grande || $sabe_volar);//true

echo "<br>";
//OR
var_dump($sabe_volar || $tiene_2_patas);//false

echo "<br>";
//NOT
var_dump(!$le_gusta_comer);//false

echo "<br>";
//NOT+AND
var_dump(!$le_gusta_comer && $es_michi_grande); //false

echo "<br>";


