<?php

//use Bookstore\Domain\Book as Mybook;
use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;

use Bookstore\Domain\Customer\Basic;

// Autoloader function to autoload classes
function autoloader($classname){
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/' . $directory . '.php';
    require_once $filename;
}

spl_autoload_register('autoloader');

//check if customer is valid to borrow book
function checkIfValid(Customer $customer, $books)
{
    return $customer->getAmountToBorrow() >= count($books);
}
// instantiate
$harry_potter = new Book(8844775566443, "Harry potter and the goblet of fire", "Ryan Dhungel", 10);
$harry_potter1 = new Book(8844775566443, "Harry potter and the goblet of fire", "Ryan Dhungel", 10);
$harry_potter2 = new Book(8844775566443, "Harry potter and the goblet of fire", "Ryan Dhungel", 10);
$harry_potter3 = new Book(8844775566443, "Harry potter and the goblet of fire", "Ryan Dhungel", 10);

$first_customer = new Basic(1, "Ryan", "Dhungel", "ryan@gmail.com");

//var_dump($first_customer->sayHi());
var_dump(checkIfValid($first_customer, [ $harry_potter, $harry_potter1, $harry_potter2, $harry_potter3 ]));