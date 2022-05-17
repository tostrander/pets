<?php

//Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

//Require the Pet class
require ('pet.php');

//Java version:  Pet pet = new Pet(); pet.eat();
$pet = new Pet();
$pet->eat();
