<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Operaciones con funciones</title>
  </head>
  <body>

    <form class="" action="" method="post">

    <label for="operacion">Operación</label>
    <select class="operacion" name="operacion">
      <option value="0"></option>
      <option value="suma">Suma</option>
      <option value="resta">Resta</option>
      <option value="multiplicacion">Multiplicación</option>
      <option value="division">División</option>
    </select>
<p>
    <label for="numero1">
      <input type="number" name="numero1" value="" required placeholder="Ingrese un número">
     </label>
</p>

<p>
     <label for="numero2">
       <input type="number" name="numero2" value="" required placeholder="Ingrese un número">
     </label>
</p>

<p>
  <input type="submit" name="enviar" value="Calcular">
  <input type="reset" name="" value="Limpiar">

</p>

    </form>

  </body>
</html>

<?php

if (!empty($_POST['enviar'])) {
  //echo "FORMULARIO RECIBIDO:<br/>";
  //echo "====================<p/>";

  $operacion = $_POST['operacion'];


  //echo $operacion . "<br>";

  if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];

    //echo "El número 1 es: " . $num1 . "<br>";
    //echo "El número 2 es: " . $num2 . "<br>";
    $resultado = 0;

    function opera($operacion,$num1,$num2) {

      if ($operacion == 0) {
        echo "Elija una operación válida";
      }else {
        switch ($operacion) {
          case 'suma':
            $resultado = $num1 + $num2;
            break;
          case 'resta':
            $resultado = $num1 - $num2;
            break;
          case 'multiplicacion':
            $resultado = $num1 * $num2;
            break;

          case 'division':
            $resultado = $num1 / $num2;
            break;

          default:
          echo "Debe ingresar una operación válido <br>";
            break;
        }
      }
      if ($operacion == 0) {
        echo "<br>";
      }else {
        return "El resultado de la " . $operacion . " es: " . $resultado . "<br>";
      }

      }

    }
  }


echo opera($operacion,$num1,$num2);



 ?>
