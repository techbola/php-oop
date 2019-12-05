<?php

// require classes
require_once __DIR__.'/Book.php';
require_once __DIR__.'/Customer.php';

// instantiate
$harry_potter = new Book(8844775566443, "Harry potter and the goblet of fire", "Ryan Dhungel", 5);
//$harry_potter->isbn = 8844775566443;
//$harry_potter->title = "Harry potter and the goblet of fire";
//$harry_potter->author = "Ryan Dhungel";
//$harry_potter->available = 0;

$first_customer = new Customer(1, "Ryan", "Dhungel", "ryan@gmail.com");

var_dump($first_customer->setEmail('bola@gmail.com'));
var_dump($first_customer->getEmail());
//var_dump($harry_potter->title);