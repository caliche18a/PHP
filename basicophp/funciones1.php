<?php

function pokemon(){
  $numeroAleatorio = rand(1,10);

  switch ($numeroAleatorio) {
    case 1:
      echo "Picachú <br>";
      break;

    case 2:
      echo "Charmander <br>";
      break;

    case 3:
      echo "Mewtwo <br>";
      break;

    default:
      echo "Lo siento, no hay pokémon para ti. <br>";
      break;
  }

  //return $numeroAleatorio;
}

for ($i=0; $i < 20; $i++) {
  echo pokemon();
}



 ?>
