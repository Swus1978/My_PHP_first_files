<?php
function fx($x)
{
    do {
        $count = false;
        for ($i = 0, $c = count($x); $i < $c - 1; $i++) {
            if ($x[$i] == $x[$i + 1]) {
                list($x[$i + 1], $x[$i]) = array($x[$i], $x[$i + 1]);
                $count = true;
            }
        }
    } while ($count);
    return $x;
}

$x = array(3, 0, 2, 5, -1, 4, 1);
$result = fx($x);
print_r($result);

?>
