<?php

echo "Me podrías decir la hora?";
echo "<br>";

function hora(){
  date_default_timezone_set('America/Bogota');

  $fecha_actual = getdate();

  return $fecha_actual['hours'] . ":" . $fecha_actual['minutes'] . ":" . $fecha_actual['seconds'];

}

echo "¡Claro que si, son las " . hora();;

echo "<br>";

 ?>
