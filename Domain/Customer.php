<?php

namespace Bookstore\Domain;

abstract class Customer extends Person
{

    private $id;
//    private $firstname;
//    private $surname;
    private $email;

    public function __construct($id, $firstname, $surname, $email)
    {
        parent::__construct($firstname, $surname);

        $this->id = $id;
//        $this->firstname = $firstname;
//        $this->surname = $surname;
        $this->email = $email;
    }

    //    abstract methods
//    Abstract classes forces the children to implement its abstract methods
//Abstract class cannot be instantiated
    abstract public function getMonthlyFee();
    abstract public function getAmountToBorrow();
    abstract public function getType();

    // we use encapsulation to access private properties using setters and getters (accessors and mutators)
    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getFullName()
    {
        return $this->surname . ' ' . $this->firstname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setFirstName(String $value)
    {
        $this->firstname = $value;
    }

    public function setEmail(String $email)
    {
        $this->email = $email;
    }

    public function sayHi()
    {
        return "Yoho " . $this->firstname . ' ' . parent::sayHi();
    }

}