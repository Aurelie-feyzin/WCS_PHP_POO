<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$truck = new Truck('orange', 3, Motorized::ALLOWED_ENERGIES[0], 200);
$bike = new Bicycle('red', 1);
$skateboard = new Skateboard('blue', 0);
$car = new Car('green', 4, Motorized::ALLOWED_ENERGIES[1]);

$bike->switchOn();
var_dump($bike);
$bike->setCurrentSpeed(15);
$bike->switchOn();
var_dump($bike);
$bike->switchOff();
var_dump($bike);
