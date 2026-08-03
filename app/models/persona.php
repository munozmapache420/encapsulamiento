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
    if (is_string($nombre) && trim($nombre) !== "")
    {
    $this->nombre= $nombre;
    }
}

public function setApellido($apellido){
    if (is_string($apellido) && trim($apellido) !== "")
        {
            $this->apellido= $apellido;
        }
    
}

public function setEdad($edad){
    if (is_numeric($edad) && $edad >= 18 && $edad <= 120 && trim($edad) !== "") {
        $this->edad = $edad;
    } else {
        echo "Edad no válida.";
    }
}

public function setCorreo($correo){
        if (is_string($correo) && trim($correo) !== "")
        {
    $this->correo= $correo;
    }
}

public function setTrabajo($trabajo){
        if (is_string($trabajo) && trim($trabajo) !== "")
        {
    $this->trabajo= $trabajo;
        }
}


  public function saludar(){
    echo "hola: " . $this->nombre . "</br>" ."tu apellido es: ". $this->apellido . "</br>" . " tu edad es: " . $this->edad . "</br>" ."tu correo es: " . $this->correo . "</br>". "trabajas en: " . $this->trabajo . "</br>". "</br>";
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