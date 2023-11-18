<?php
// $amigo = array('telefono' => 9842381648, 'edade'=>20,'pais'=> 'mexico');

// extract($amigo);

// echo $telefono;
$semana = array(
    'Lunes', 'Martes', 'Miercoles',
    'Jueves', 'Viernes', 'Sabado', 'Domingo'
);
// $ultimo_dia = array_pop($semana);

// foreach ($semana as $dia){
//     echo $dia . '<br />';
// }

// echo join(' <br />', $semana);
// echo count($semana);

// sort($semana);
// echo join(', ', $semana);

$semana_reverse = array_reverse($semana);
echo join(', ', $semana);

?>