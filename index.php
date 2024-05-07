<?php

// Include the class file
require ('pet.php');

// Instantiate a pet object
$pet1 = new Pet('Pluto', 'pink');
$pet2 = new Pet('Bob');
$pet3 = new Pet();

$pet3->setName("Oliver");
echo "Pet's name is " . $pet3->getName();

echo "<pre>";
var_dump($pet1);
var_dump($pet2);
var_dump($pet3);
echo "</pre>";

// Invoke the eat method
$pet1->eat();