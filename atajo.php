<?php
$edad = 18;

$edad = (isset($edad)) ? $edad : '<h1>El usuario no establecio su edad.</h1>';

echo '<h1>Edad:</h1> ' . $edad;

if (isset($edad)) {
    $edad = $edad;
} else {
    $edad = '<h1>El usuario no establecio su edad.</h1>';
}

echo '<h1>Edad:</h1> ' . $edad;


?>