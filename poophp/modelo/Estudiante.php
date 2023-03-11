<?php

/**
 *
 */
class Estudiante
{

  //Atributos

  private $nombre = "";
  private $edad = 0;

  //Constructor

  function __construct($nombre,$edad)
  {
    $this->nombre = $nombre;
    $this->edad = $edad;

  }


  //Métodos

  public function getNombre(){
    return $this-> nombre;
  }

  public function setNombre(){
    $this->nombre = $nombre;
  }

  public function getEdad(){
    return $this-> edad;
  }

  public function setEdad(){
    $this->edad = $edad;
  }

  public function mostrarInfo(){

        // Llamamos a otros métodos
        $info = "<h1>Información del estudiante:</h1>";
        $info.= "<br/> NOMBRE: ".$this->getNombre();
        $info.= "<br/> EDAD: ".$this->getEdad();
        $info.= "<br/>";

        return $info;
    }


}
