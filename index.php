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

$motorWay = new MotorWay();
$motorWay->addVehicle($truck);
$motorWay->addVehicle($bike);
$motorWay->addVehicle($skateboard);
$motorWay->addVehicle($car);
var_dump($motorWay);

$residentialWay = new ResidentialWay();
$residentialWay->addVehicle($truck);
$residentialWay->addVehicle($bike);
$residentialWay->addVehicle($skateboard);
$residentialWay->addVehicle($car);

var_dump($residentialWay);

$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($truck);
$pedestrianWay->addVehicle($bike);
$pedestrianWay->addVehicle($skateboard);
$pedestrianWay->addVehicle($car);

var_dump($pedestrianWay);


