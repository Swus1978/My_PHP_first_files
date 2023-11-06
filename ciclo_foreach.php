<?php

$months = array(
    'January', 'February', 'March',
    'April', 'May', 'June', 'July',
    'August','September', 'October',
    'November', 'December',
);


$Juan = array ('cellphone' => 9842341648, 'age' => 45, 'country' => 'US');









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Months</h1>
    <ul>
        <?php
        // foreach ($months as $month){
        //     echo '<li>'.$month.'<li/>';
        // }


        foreach($Juan as $data => $value) {
            echo '<li>'.$data. ' : '. $value .'<li/>';
        }

        ?>
    </ul>
</body>
</html>