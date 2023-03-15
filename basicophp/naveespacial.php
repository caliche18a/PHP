<?php

$preciosDeCafes = [12,56,32,48,19,36];

usort($preciosDeCafes,function ($a,$b)
{

  //<=>: Operador de nave espacial

  //Ordenar de mayor a menor
//  $nave = $b <=> $a;

//ordenar de menor a mayor
$nave = $a <=> $b;

  return $nave;
});


var_dump($preciosDeCafes);

echo "<br>";


 ?>
