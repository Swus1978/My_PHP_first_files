<?php
include("clase.php");
$num1= 10;
$num2= 5;

echo "Resultado de suma: ".matematicas::sumar($num1, $num2);
echo "<br/>";
echo "Resultado de resta: ".matematicas::resta($num1, $num2);
echo "<br/>";
echo "Resultado de multiplicar: ".matematicas::multiplicar($num1, $num2);
echo "<br/>";
echo "Resultado de dividir: ".matematicas::dividir($num1, $num2);




?>