<?php

declare(strict_types=1);

function cuadrado( $numero){
    return $numero * $numero;
}

$numero = '8';
echo 'El cuadrado de ' . $numero . ' es ' . cuadrado($numero);

?>
