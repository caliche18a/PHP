<?php

echo "<h1>Manipulación de arreglos</h1>";

$edades = [18,30,45,65];

//count para contar elementos de un arreglo
var_dump(count($edades)); //int(3)
echo "<br>";
echo count($edades);

echo "<br>";

// array push

array_push($edades,13);

echo count($edades);
echo "<br>";
var_dump($edades);
echo "<br>";

//is_array

var_dump(is_array($edades));
echo "<br>";
$noEsArreglo ="";
echo "<br>";
var_dump(is_array($noEsArreglo));

//array_pop
echo "<br>";
var_dump(array_pop($edades));


//explode
$listadeFrutas = "Manzana,Peras,Fresas,Mandarinas,Naranjas";
$listadeFrutasArray = explode(",",$listadeFrutas);
var_dump($listadeFrutasArray);
echo "<br>";
var_dump(is_array($listadeFrutasArray));

//implode
echo "<br>";

$listadeFrutas1 = implode("|",$listadeFrutasArray);
echo $listadeFrutas1;
echo "<br>";
var_dump($listadeFrutas1);

echo "<br>";

