<?php 
    require_once 'Vehicle.php';

    class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private int $stockage;
    private int $charge = 0;

    public function __construct(int $stockage, string $color, int $nbSeats, string $energy)
    {
    parent::__construct($color, $nbSeats);
    $this->stockage = $stockage;
    $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
        }
    return $this;
    }

    public function getStockage(): int
    {
        return $this->stockage;
    }

    public function setStockage(int $stockage): Truck
    {
        if($stockage >= 0){
            $this->stockage = $stockage;
        }
    }

    public function getCharge(): int
    {
        return $this->charge;
    }

    public function setCharge(int $charge): Truck
    {
        $this->charge = $charge;
    }
    

    function currentCharge(): string
    {
    if($this->charge < $this->stockage){
        return 'in filling';
    }else{
        return 'full';
    }
    }

    function fillMax(): string
    {
        $sentence = "";
        while ($this->charge < $this->stockage){
            $this->charge += 10;
            $sentence .= "Add 10 to the charge !".'<br>';
        }
        $sentence .= "The truck is full, ready to go !";
        return $sentence;
    }
}