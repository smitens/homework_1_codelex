<?php

echo "Exercise 1". "\n";
$int = 10;
$string = "10";

if ($int == $string) {
    echo "Are the same value";
} else {
    echo "Are not the same value:(";
}


echo "\n";
echo "Exercise 2". "\n";
$number = 50;
if ($number >=1 && $number <=100) {
    echo "yes, its in the range";
} else {
    echo "no, its not in the range";
}

echo "\n";
echo "Exercise 3". "\n";
$value = "hello";
if ($value === "hello") {
   echo "world";
}

echo "\n";
echo "Exercise 4". "\n";
$value = 30;
$valueX = 20;
$valueY = 40;
if ($value > $valueX && $value < $valueY && $value%2 === 0) {
    echo "Condition is true!";
} else {
    echo "Condition is false!";
}

echo "\n";
echo "Exercise 5". "\n";
$integer = 50;
$y = 1;
$z = 100;
if ($integer >= 1 && $integer <= 100) {
    echo "correct";
} else{
    echo "not true";
}

echo "\n";
echo "Exercise 6". "\n";
$plateNumber = "JP4769";

switch ($plateNumber) {
    case "JP4769":
        echo "It's your car!";
        break;
    default:
        echo "It's not your car.";
}

echo "\n";
echo "Exercise 7". "\n";
$number = 40;
switch ($number) {
    case $number <50;
        echo "low";
        break;
    case $number >50 && $number <100;
        echo "medium";
        break;
    case $number >100;
        echo "high";
        break;
}