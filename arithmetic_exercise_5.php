<?php
echo "I'm thinking of a number between 1-100.  Try to guess it.\n";
echo "Enter the number: ";
$number = (int)trim(readline());
$correctNumber = rand(1, 100);
if ($number < $correctNumber) {
    echo "Sorry, you are too low.  I was thinking of ". $correctNumber;
} else if ($number > $correctNumber) {
    echo "Sorry, you are too high.  I was thinking of ". $correctNumber;
} else {
    echo "You guessed it!  What are the odds?!?";
    }
exit();