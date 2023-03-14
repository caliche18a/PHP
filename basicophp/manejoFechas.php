<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejos de fechas en PHP</title>
</head>
<body>

<?php

echo "Fecha actual: " . date('d-m-Y');
echo "<br>";
echo "Días y mes actual: " . date('d-m');
echo "<br>";
echo "Día actual: " . date('d');
echo "<br>";
echo "Mes actual: " . date('m');
echo "<br>";
echo "Año actual: " . date('Y');
echo "<br>";
echo "Mes y año actual: " . date('m-Y');
echo "<br>";
echo "Semana actual del año: " . date('W');
echo "<br>";
echo "Total días del mes actual: " . date('t');


?>
    
</body>
</html>