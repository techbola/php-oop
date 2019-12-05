<?php


class Book
{

    // properties are variables
    public $isbn;
    public $title;
    public $author;
    public $available;

    // magic method construct
    public function __construct(int $isbn, String $title, String $author, int $available)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    public function __toString()
    {
        $result = $this->title . ' by ' . $this->author;
        if (!$this->available) {
            $result .= 'Not Available';
        }
        return $result;
    }

    // methods are function
    public function getPrintableTitle(){
        $result = $this->title . ' by ' . $this->author;
        if (!$this->available) {
            $result .= 'Not Available';
        }
        return $result;
    }

    public function getCopy(){
        if ($this->available < 1) {
            return false;
        } else {
            $this->available--;
            return true;
        }
    }

}

// instantiate
$harry_potter = new Book(8844775566443, "Harry potter and the goblet of fire", "Ryan Dhungel", 5);
//$harry_potter->isbn = 8844775566443;
//$harry_potter->title = "Harry potter and the goblet of fire";
//$harry_potter->author = "Ryan Dhungel";
//$harry_potter->available = 0;

if ($harry_potter->getCopy()) {
    echo 'Here is your copy of ' . $harry_potter->title . '<br>';
} else {
    echo 'Sorry its gone <br>';
}

echo $harry_potter;