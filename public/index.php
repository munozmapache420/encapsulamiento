<?php

require_once "../clases/persona.php";

//**$persona1= new persona("mapache","sadic",21,"munozmapache420@gmail.com","programador");
//$persona2= new persona("marioLaCobrona","chupadora",35,"culoFijo24/7@gmail.com","prostituta"); **\\

$persona1= new persona("mapache","saidc",21,"correo", "programador");
$persona2= new persona("marioCobradora", "cobradora", 35,"cobraodrsa390@gmial.com", "cobradora");

$persona1->saludar();
$persona2->saludar();

echo "</br>";

echo "hola" . $persona1->getNombre() . "</br>";
echo "tienes una edad de " . $persona1->getEdad() . "</br>";
echo "</br>";

echo "hola".   $persona2->getNombre() . "</br>";
echo "tienes una edad de " . $persona1->getEdad() . "</br>";
?>