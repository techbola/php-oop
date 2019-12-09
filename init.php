<?php

use Bookstore\Domain\Book as Mybook;
use Bookstore\Domain\Customer;

// Autoloader function to autoload classes
function autoloader($classname){
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/' . $directory . '.php';
    require_once $filename;
}

spl_autoload_register('autoloader');

// require classes
//require_once __DIR__.'/Domain/Book.php';
//require_once __DIR__.'/Domain/Customer.php';

// instantiate
$harry_potter = new Mybook(8844775566443, "Harry potter and the goblet of fire", "Ryan Dhungel", 5);
//$harry_potter->isbn = 8844775566443;
//$harry_potter->title = "Harry potter and the goblet of fire";
//$harry_potter->author = "Ryan Dhungel";
//$harry_potter->available = 0;

$first_customer = new Customer(1, "Ryan", "Dhungel", "ryan@gmail.com");

var_dump($first_customer);
//var_dump($first_customer->setEmail('bola@gmail.com'));
//var_dump($first_customer->getEmail());
//var_dump($harry_potter->title);