<?php
$x = array(3, 0, 2, 5, -1, 4, 1);

function fx($x)
{
    $loe = $gt = array();
    if (count($x) < 2) {
        return $x;
    }
    $pivot_key = key($x);
    $pivot = array_shift($x);
    foreach ($x as $val) {
        if ($val <= $pivot) {
            $loe[] = $val;
        } elseif ($val > $pivot) {
            $gt[] = $val;
        }
    }
    return array_merge(fx($loe), array($pivot_key => $pivot), fx($gt)); // Fixed "aray" to "array"

    // You can remove the following line as it's unreachable after the return statement.
    // echo fx($x);
}

$x = fx($x);

print_r($x);
