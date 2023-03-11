<?php

require '../modelo/Estudiante.php';

// Creamos el objeto / Instanciamos la clase y le pasamos los parámetros del constructor
$estudiante = new Estudiante("Carlos",37);

echo $estudiante->mostrarInfo();

$estudiante1 = new Estudiante("Mariana",25);

echo $estudiante1 -> mostrarInfo();
