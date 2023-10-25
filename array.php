

<?php

$weeks = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri','Sat', 'Sun');
// How to call a position on the array.

//echo $weeks[1];

// hOW TO ADD TO THE ARRAY.
//$weeks[7] = 'Shabbat';

// En los arreglos podemos guardar cualquier tipo de dato, incluso podemos guardar un arreglo dentro de otro.
$arreglo = array('cadena de texto', '1', array('usd','123'), true);


# Ejemplo en el que mostramos los dias de la semana en pantalla a partir de nuestro arreglo llamado weeks.


echo $weeks[0] . '<br/>';
echo $weeks[1] . '<br/>';
echo $weeks[2] . '<br/>';
echo $weeks[3] . '<br/>';
echo $weeks[4] . '<br/>';
echo $weeks[5] . '<br/>';
echo $weeks[6] . '<br/>';

?>