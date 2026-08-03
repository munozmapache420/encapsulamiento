<?php

require_once "../app/models/persona.php";

//**$persona1= new persona("mapache","sadic",21,"munozmapache420@gmail.com","programador");
//$persona2= new persona("marioLaCobrona","mario",35,"culoFijo24/7@gmail.com","trabajaDORA"); **\\

$persona1= new persona("mapache","sadic",21,"munozmapache420@gmail", "programador");
$persona2= new persona("mario", "cobradora", 35,"cobradora390@gmial.com", "cobradora");

$persona1->saludar();
$persona2->saludar();

echo "</br>";

echo "hola: " . $persona1->getNombre() . "</br>";
echo "tienes una edad de: " . $persona1->getEdad() . "</br>";
echo "</br>";

echo "hola: ".   $persona2->getNombre() . "</br>";
echo "tienes una edad de: " . $persona2->getEdad(1) . "</br>";
?>