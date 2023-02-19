<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 con PHP</title>
</head>
<body>

<form action="" method="post">
    <label for="dinero">Ingresa tus donaciones
        <input type="number" name="dinero" id="dinero" placeholder="Ingrese un valor" autocomplete="no" autofocus required >
    </label>
    <button type="submit" name="validar" id="validar">Validar</button>
</form>
</body>
</html>

<?php

if(isset($_POST["validar"])) {
    if($_POST['dinero'] >= 100){
        echo "Puedes retirar tu dinero de las donaciones";
    } else{
        echo "Tus donaciones son  {$_POST['dinero']} USD de debe ser mayor a 100 USD";
    }
}
echo "<br>";
?>
<a href=""><button id="atr">Limpiar</button></a>



