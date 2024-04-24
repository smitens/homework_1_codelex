<?php
$firstNumber = (int) readline("Enter integer one: ");
$secondNumber = (int) readline("Enter integer two: ");
if ($firstNumber === 15 || $secondNumber === 15 || $firstNumber+$secondNumber === 15) {
    echo "true";
} else {
    echo "false";
}