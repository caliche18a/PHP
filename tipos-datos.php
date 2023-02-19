<?php
#Tipos de datos en PHP

#numericos

$numero = 5;
$decimal1 = 3.14;
$decimal2 = 3.1234567891234567891234567891234567893123456785;


#Cadenas

$char = 'a';
$cadena = "Hola Carlos";

#Booleanos

$verdadero = true;
$falso = false;

#Sin valor

$nulos = null;
#$vacio = undefined;

var_dump($numero,$decimal1,$decimal2,$char,$cadena,$verdadero,$falso,$nulos) ;
echo "<br>";
echo gettype($cadena);
echo "<br>";
echo gettype($char);
echo "<br>";
echo gettype($verdadero);