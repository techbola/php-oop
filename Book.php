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