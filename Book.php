<?php


class Book
{

    // properties
    public $isbn;
    public $title;
    public $author;
    public $available;

}

// instantiate
$harry_potter = new Book();
$harry_potter->isbn = 8844775566443;
$harry_potter->title = "Harry potter and the goblet of fire";
$harry_potter->author = "Ryan Dhungel";
$harry_potter->available = 10;

var_dump($harry_potter);