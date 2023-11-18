<?php
// Regresa 1 si el valor en la izquierda es mayor que el de la derecha
// Regresa 0 si los valores en ambos lados son iguales
// Regresa -1 si el valor en la derecha es mayor queel de la izquierda

// < = >
// 1 0 -1


echo  10 <=> 1;
echo '<br/>';
echo 10 <=> 10;
echo '<br/>';
echo 1 <=> 10;

$arreglo = [3,1,2,2,4];
// sort($arreglo);
// function comparar($a, $b) {
//     if($a == $b){
//         return 0;
//     }elseif($a > $b){
//         return 1;
//     }else{
//         return -1;
//     }
// }

// La dos funciones hacen lo mismo pero PHP lo hace con la  operacion spaceship

function comparar($a, $b) {
    return $a <=> $b;
}


usort($arreglo,  'comparar');

echo implode(' - ',$arreglo);

?>