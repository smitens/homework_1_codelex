<?php
echo "Exercise 1". "\n";
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($numbers as $number) {
    echo $number. " ";
}

echo "\n";
echo "Exercise 2". "\n";
for ($i = 1; $i <= count($numbers); $i++) {
    echo $i. " ";
}

echo "\n";
echo "Exercise 3". "\n";
$x = 1;
while ($x<10) {
    echo "codelex". " ";
    $x++;
}

echo "\n";
echo "Exercise 4". "\n";
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($numbers as $number) {
    if ($number%3 === 0) {
        echo $number. " ";
    }
}

echo "\n";
echo "Exercise 5". "\n";
$persons = [
    [
        "name" => "Zane",
        "surname" => "Šmite",
        "age" => 40,
        "birthday" => "19.02.1984"
    ],
    [
        "name" => "Sandra",
        "surname" => "Šmite",
        "age" => 64,
        "birthday" => "23.03.1960"
    ],
    [
        "name" => "Dace",
        "surname" => "Šmite",
        "age" => 38,
        "birthday" => "24.12.1985."
    ]
];
foreach ($persons as $person) {
    echo "\n{$person['name']} \n{$person['surname']} \n{$person['age']} \n{$person['birthday']}";
}