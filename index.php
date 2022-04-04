<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$car = new Car("Red", 4, "Love", 100);
echo $car->dump();

echo $car->start();
echo $car->forward();
echo $car->brake();