<?php

//Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

//Require the Pet class
require ('pet.php');

//Java version:  Pet pet = new Pet(); pet.eat();
$pet = new Pet("Rover", "brown");
//$pet2 = new Pet();
$pet3 = new Pet("pink");
$pet->eat();
//$pet2->eat();
$pet3->eat();
