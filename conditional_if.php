<?php
//if(condicion){
    // Instrucciones
//}
/*
== Igualdad

< Menor que

> Mayor que

<= Menor o igual que

>= Mayor o igual que

!= Diferente

=== Igualdad

! Negacion




*/

/*
&& - Evalua que se cumplan Las 2 condiciones

|| - Evalua que se cumplan Al menos una de las 2 condiciones

xor - Evalua que se cumpla una y solo una condicion

*/

$edad = 18;
$nombre = 'Juan';

if($edad >= 18 && $nombre == 'Juan'){
    echo "<h1>Es mayor de edad</h1>";
}

if($edad < 18 or $nombre != 'Juan'){
    echo "<h1>Es menor de edad</h1>";
}


?>