<?php
$lowestNumber = 1;
$highestNumber = 100;
$sum = 0;
for ($i = $lowestNumber; $i <=$highestNumber; $i++) {
    $sum = $sum + $i;
}
$countOfNumbers = $highestNumber - $lowestNumber + 1;
$aver = $sum/$countOfNumbers;
echo "The sum of 1 to 100 is ". $sum . "\n";
echo "The average is ". $aver;

