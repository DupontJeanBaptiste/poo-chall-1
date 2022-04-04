<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
echo $bicycle->dump();

$car = new Car('green', 4, 'electric');
echo $car->forward();
echo $car->dump();

$truck = new Truck(100, 'blue', 4, 'fuel');
echo $truck->dump();
echo $truck->forward();
echo $truck->dump();
echo $truck->currentCharge();
echo $truck->fillMax();