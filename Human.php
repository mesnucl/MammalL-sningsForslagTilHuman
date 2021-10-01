<?php
require_once("Mammal.php");

class Human extends Mammal{

    private string $name;
    private string $socialSecurityNumber;

    public function __construct(
        string $name,
        string $socialSecurityNumber,
        float $weigthInKg,
        DateTime $dateOfBirth
    )
    {
        parent::__construct($weigthInKg,$dateOfBirth);
        $this->name = $name;
        $this->socialSecurityNumber = $socialSecurityNumber;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function setName(string $newName){
        $this->name = $newName;
    }
    public function getSocialSecurityNumber() : string
    {
        return $this->socialSecurityNumber;
    }
    public function printName()
    {
        echo $this->name;
    }
    public function printNameWithGreeting(string $greeting)
    {
        echo $greeting . $this->name;
    }
    public function getNameWithGreeting(string $greeting) : string
    {
        return $greeting . $this->name;
    }
}