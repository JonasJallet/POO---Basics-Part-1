<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
$bike = new Bicycle('red)');
$car = new Car('blue', 'electricity', 4);

var_dump($bike);

var_dump($car);


// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';


echo $car->getColor() . ' car have to go on the way' . '<br>';
echo $car->start() . '<br>';
echo 'need refuel ' . $car->getEnergy() . '<br>';