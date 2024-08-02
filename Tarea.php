<?php

//Declaracion de variables

$edad = 23;
$altura = 1.73;
$nombre = "Sebastian Cedillo";
$estudiando =  true;
$numeros = array(1,2,3,4,5,6,7,8,9,10);
$a = 9;
$b = 4;


//Operaciones aritmeticas

$suma = $a + $b;
$resta = $a - $b;

echo "La suma de:  ". $a . "  + " . $b . "  es: " .$suma . "<br>";
echo "La resta de:  ". $a . "  - " . $b . "  es: " .$resta . "<br>";

//Manipulacion de cadenas

$primerNombre = "Sebastian";
$primerApellido = "Cedillo";

$nombreCompleto = $primerNombre . " " . $primerApellido;
echo $nombreCompleto . "<br>";

//Longitud de la cadena
$longitud = strlen($nombreCompleto);
echo "La longitud de la cadena es: " . $longitud. "<br>";

//Uso de condicionales

if ($edad == 23) {
    echo "Edad correcta"."<br>";
}else{
    echo "Edad incorrecta"."<br>";
}

//Creacion de un array

$vocales = array("a","e","i","o","u");

//Accediendo a los elementos

echo $vocales[0]."<br>";
echo $vocales[1]."<br>";
echo $vocales[2]."<br>";
echo $vocales[3]."<br>";
echo $vocales[4]."<br>";

//Agregando un nuevo elemento al arreglo

$vocales[] = "0";
echo $vocales[5]."<br>";

?>
