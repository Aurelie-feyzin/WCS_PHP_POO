<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
var_dump(Motorized::ALLOWED_ENERGIES);

$truck = new Truck('orange', 3, Motorized::ALLOWED_ENERGIES[0], 200);
var_dump($truck);
$truck->setCurrentStorage(250);
$truck->setCurrentStorage(50);
$truck->isFull();
$truck->setCurrentStorage(200);
$truck->isFull();
echo $truck->forward();
echo $truck->brake();


