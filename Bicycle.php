<?php
class Bicycle
{
    public function __construct(string $color
     , int $nbSeats
     , int $nbWheels)
    {
        $this->color = $color;
    }


    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;

    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }  

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $color): void
    {
        $this->currentSpeed = $currentSpeed;
    }  

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }  

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function forward(): string
    {
    $this->currentSpeed = 15;

    return "Go !";
    }

    public function brake(): string
    {
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
    }

    public function dump()
    {
    var_dump($this);
    }
}