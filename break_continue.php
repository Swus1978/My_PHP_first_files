<?php

$countries = array(
    'Mexico','Spain','Colombia','Peru','Argentina','Venezuela','Guatemala'

);

// foreach($countries as $country) {
//     if($country == 'Argentina'){
//         break;
//     }
//     echo $country . '<br/>';
//     if ($country == 'Spain'){
//         continue;
//     }
// }








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Latin America Countries</h1>
    <?php

    foreach($countries as $country) {
        if($country == 'Spain'){
            continue;
        }
        echo $country . '<br/>';
    }
    ?>
</body>
</html>