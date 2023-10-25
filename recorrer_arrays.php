<?php
$months = array(
    "January", "February", "March",
    "April", "May", "June", "July",
    "August", "September", "October",
    "November", "December"
);

$numbers = array(1,22,44,55,75,100);
//sort($months);

//rsort($months);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
</head>
<body>
    <h1>Meses del Año</h1>
    <ul>
        <?php foreach ($numbers as $number){
            echo '<li>'. $number . '</li>';
        }


        ?>
    </ul>
</body>
</html>