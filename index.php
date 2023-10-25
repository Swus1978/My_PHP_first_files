<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    echo '<h1>Hello world!</h1>';
    echo '<p>Hello world!</p>';
    ?><br>

    <?php
    $a_bool = true;
    $a_str = "foo";
    $a_str2 = 'foo';
    $an_int = 12;

    echo get_debug_type($a_bool), "\n";
    echo get_debug_type($a_str), "\n";

    if(is_int($an_int)) {
        $an_int += 4;
    }

    var_dump($an_int);

    if(is_string($a_bool)){
        echo "String: $a_bool";
    }

    ?>
</body>
</html>