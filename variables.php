<?php
// Notas:
# Los nombres de las variables son sencibles a mayusculas y minusculas
# Los nombres de las variables no pueden llevar espacios, empezar por numeros o llevar caracteres especiales como puntos o incluso lineas

# Tipos de datos:
# String: Cadena de texto
# Interger: Numeros enteros
#Double: Numeros con decimales
# Boolean: Verdadero o Falso (true / false)
# Array: Arreglo
# Object: Objeto
# Class: Clase
# Null: Cuando a una variable aun no se le ha asignado ningun valor

// Ejemplos de variables almacenado diferentes tipos de datos:

# String: de cadena
$name = 'Juan';
# Interger: Numeros enteros
$number = 7;
# Double: Numeros con decimales
$decimal_number = 7.7;
# Boolean: Verdadero o Falso (True / False)
$true = false;

# Array: Arreglo
# Object: Objeto
# Class: Clase
# Null: Cuandoi a una variable aun no se le ha asignado ningun valor

echo "Hola,  $name";


echo '<br>';

echo 'Hola, '  .$name;

echo '<br>';

echo gettype($name);

echo '<br>';

echo gettype($number);

?>