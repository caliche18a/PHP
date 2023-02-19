<?php
$escuela = array(

    array(
        "Nombre" => "Joselito",
        "Ocupacion" => "Developer increible",
        "Color" => "Naranja",
        "Comidas" => array(
            "Favoritas" => "Lasaña, Atun",
            "NoFavoritas" => "Fresas, Aguacate"
        )
    ),

    array(
        "Nombre" => "Miguelito",
        "Ocupacion" => "jQuery Developer",
        "Color" => "Blanco",
        "Comidas" => array(
            "Favoritas" => "Pescado, Pollo",
            "NoFavoritas" => "Atun"
        )
    ),

    array(
        "Nombre" => "Carlitos",
        "Ocupacion" => "Pro en PHP",
        "Color" => "Negro",
        "Comidas" => array(
            "Favoritas" => "Pizza",
            "NoFavoritas" => "Pescado"
        )
    ),

);


// Color de Carlitos
$Carlitos = $escuela[2];
echo "El color de Carlitos es " . $Carlitos["Color"];
echo "<br>";


//Las comidas favoritas de Miguelito son:

$miguel = $escuela[1];
echo "Las comidas favoritas de Miguelito son: " . $miguel["Comidas"]["Favoritas"] ;