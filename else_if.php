<?php
$mes = 'Julio';
// $verdadero = true;

// if($verdadero) {
//     echo '<h1>Verdadero</h1>';
// } else {
//     echo '<h1>Falso</h1>';
// }

if($mes == 'Diciembre') {
    echo "<h1>Feliz Navidad</h1>";
} else if($mes == 'Enero') {
    echo "<h1>Feliz Año Nuevo</h1>";
} else if($mes == 'Julio') {
    echo "<h1>Feliz Cumple Años Juan</h1>";
} else{
    echo "<h1>El mes que pusiste no tiene celebracion</h1>";
}

?>