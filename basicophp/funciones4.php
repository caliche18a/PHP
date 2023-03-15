<?php


function suma ($a=0,$b=0){
    echo "La suma de " . $a ."+". $b . " es igual a ". ($a+$b) . "<br>" ;
}

suma(10,26);


//Desempaquetar arreglos

$arreglo1 = [1,2,3];

$arreglo2 = [4,5,6];

$resultado = [...$arreglo1,...$arreglo2];


var_dump($resultado);

echo "<br>";


//generación de parámetros dinámicos o infinitos parámetros


function sumaInfinita(...$params) {

  $suma = 0;

  var_dump($params);
  echo "<br>";
  foreach ($params as $numero) {
    $suma = $suma + $numero;
  }

  return "La sumatoria de los parámetros es: ". $suma;
}

echo sumaInfinita(1,6,9);
