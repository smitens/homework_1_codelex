<?php
$product = 1;
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for ($i = 0; $i < count($numbers); $i++) {
    $product *= $numbers[$i];
}
echo $product;

echo "\n";

function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

echo factorial(10);