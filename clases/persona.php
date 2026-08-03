<?php

class persona{

    private $nombre;
    private $apellido;
    private $edad;
    private $correo;
    private $trabajo;


  public function __construct($nombre,$apellido,$edad,$correo,$trabajo){
  $this->nombre=$nombre;
  $this->apellido=$apellido;
  $this->edad=$edad;
  $this->correo=$correo;
  $this->trabajo=$trabajo;
}

public function setNombre($nombre){
    $this->nombre= $nombre;
}
public function setApellido($apellido){
    $this->apellido= $apellido;
}
public function setEdad($edad){
    $this->edad= $edad;
}
public function setCorreo($correo){
    $this->correo= $correo;
}
public function setTrabajo($trabajo){
    $this->trabajo= $trabajo;
}


  public function saludar(){
    echo "hola: " . $this->nombre . "</br>" ."tu apellido es: ". $this->apellido . "</br>" . " tu edad es: " . $this->edad . "</br>" ."tu correo es: " . $this->correo . "</br>". "trabajas en: " . $this->trabajo . "</br>";
   }


   public function getNombre(){
    return $this->nombre;
   }

   public function getApellido(){
    return $this->apellido;
   }

   public function getEdad(){
    return $this->edad;
   }

   public function getCorreo(){
    return $this->correo;
   }

   public function getTrabajo(){
    return $this->trabajo;
   }

}


?>