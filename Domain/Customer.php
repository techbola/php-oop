<?php

namespace Bookstore\Domain;

class Customer
{

    private $id;
    private $firstname;
    private $surname;
    private $email;

    public function __construct($id, $firstname, $surname, $email)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }

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

}