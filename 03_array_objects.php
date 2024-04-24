<?php

echo "Exercise 1". "\n";
$numbers = [1, 2, 3];
echo array_sum($numbers);

echo "\n";
echo "Exercise 2". "\n";
$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
var_dump($person["name"]);
var_dump($person["surname"]);
var_dump($person["age"]);

echo "\n";
echo "Exercise 3". "\n";
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;

var_dump($person -> name);
var_dump($person -> surname);
var_dump($person -> age);


echo "\n";
echo "Exercise 4". "\n";
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $items[0][1]["name"] . " " . $items[0][1]["surname"] . " " . $items[0][1]["age"];

echo "\n";
echo "Exercise 5". "\n";

echo $items[0][0] ["name"] ."&". $items[0][1] ["name"] . " ". $items[0][1] ["surname"]. "'s";
