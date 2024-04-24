<?php
$number = (int) readline("Enter any integer and I will tell you if it's even or odd: ");
if ($number%2 == 0) {
    echo "Even Number";
} else{
    echo "Odd Number";
}
exit("\n"."bye!");