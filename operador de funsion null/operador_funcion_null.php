<?php

$nombre = $_GET['nombre'] ?? 'Anonimo';

// $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';


// if(isset($_GET['nombre'])){
//     $nombre = $_GET['nombre'];
// }else{
//     $nombre = 'Anonimo';
// }

echo $nombre;



?>