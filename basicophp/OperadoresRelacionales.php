<?php

echo "<h1>Operadores Relacionales</h1>";

/*
==	Igual a
===	Idéntico a
!=	Diferente de
<>	Diferente de
!==	No idéntico a
>	Mayor que
>=	Mayor o igual que
<	Menor que
<=	Menor o igual que
<=>	Nave espacial
??	Fusión de null
 */

$a = 5;
$b = 5;
$c = 9;
$d = 2;
$e = "5";



var_dump($a==$b);//true
echo "<br>";
var_dump($a===$e);//false
echo "<br>";
var_dump($c>$d);//true

echo "<br>";
var_dump($a!==$b);//false

echo "<br>";
var_dump($a!==$e);//true

echo "<br>";
var_dump($a<=>$b);//0
echo "<br>";
var_dump(2 <=> 5);//-1