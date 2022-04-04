<?php
class Car
{
    public function __construct(string $color
     , int $nbSeats
     , string $typeEnergie
     , int $currentEnergie)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->typeEnergie = $typeEnergie;
        $this->currentEnergie = $currentEnergie;
    }

    private string $color;
    private int $currentSpeed;
    private int $nbSeats;
    private int $nbWheels = 4;
    private string $typeEnergie;
    private int $currentEnergie;

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

    public function getTypeEnergie(): string
    {
        return $this->typeEnergie;
    }
    public function setTypeEnergie(string $typeEnergie): void
    {
        $this->typeEnergie = $typeEnergie;
    }  

    public function getCurrentEnergie(): int
    {
        return $this->currentEnergie;
    }
    public function setCurrentEnergie(int $currentEnergie): void
    {
        $this->currentEnergie = $currentEnergie;
    }  

    public function start(): string
    {
        $this->currentSpeed = 0;
        return "Ready to go";
    }

    public function forward(): string
    {
        $sentence = "";
    while ($this->currentSpeed < 100) {
        $this->currentSpeed += 10;
        $sentence .= "Faster !";
        }
        $sentence .= "Maximum speed !";
        return $sentence;
    }

    public function brake(): string
    {
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed -= 20;
       $sentence .= "Brake !";
   }
   $sentence .= "We are stop.";
   return $sentence;
    }

    public function dump()
    {
    var_dump($this);
    }
}