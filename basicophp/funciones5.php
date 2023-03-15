<?php


function carlos(){

  $aleatorio = rand(1,5);

  $frase = "";

  switch ($aleatorio) {
    case 1:
      $frase = "Nunca pares de aprender";
      break;

    case 2:
      $frase = "Las empresas no son familias";
      break;

    case 3:
      $frase = "La tecnología es el futuro";
      break;

    case 4:
      $frase = "AMO PHP";
      break;

    default:
      $frase = "No es válido";
      break;
  }

  return $frase;
}

echo carlos();

 ?>
