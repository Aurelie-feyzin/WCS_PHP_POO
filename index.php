<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$car = new Car('green', 4, Motorized::ALLOWED_ENERGIES[1]);
var_dump($car);
try {
    $car->start();
} catch (Exception $e) {
    echo $e->getMessage();
    $car->setParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut';
}
var_dump($car);
