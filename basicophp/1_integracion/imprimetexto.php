<?php

$nombre = "Carlos Jiménez";


 ?>


<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Imprime texto con etiquetas con PHP</title>
  </head>
  <body>

    <h1>Imprime texto con etiquetas con PHP</h1>

    <?php

    echo "<b>Hola, por acá integrando etiquetas de HTML con PHP.</b> ";

    echo "<br>";
    echo "<br>";

    echo "<h2> Hola " . $nombre . " bienvenido </h2>";





     ?>

  </body>
</html>
