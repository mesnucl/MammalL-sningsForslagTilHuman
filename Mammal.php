<?php

abstract class Mammal
{
    private float $weigthInKg;
    private DateTime $dateOfBirth;

    public function __construct(float $weigthInKg, DateTime $dateOfBirth)
    {
        $this->weigthInKg = $weigthInKg;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getWeigthInKg() : float
    {
        return $this->weigthInKg;
    }
    public function increaseWeigthInKg(float $addKg ){
        $this->weigthInKg = $this->weigthInKg + $addKg;
    }
    public function decreaseWeigthInKg(float $substractKg ){
        $this->weigthInKg = $this->weigthInKg - $substractKg;
    }
    public function getAge() : int
    {
        $todaysDate = new DateTime();

        $difference = $todaysDate->diff($this->dateOfBirth);

        return $difference->y;
    }
}