<?php

require_once 'Bicycle.php';
require_once 'Car.php';
$bike = new Bicycle();
var_dump($bike);
$bike->setColor("blue");
$bike->setCurrentSpeed(0);
$bike->getCurrentSpeed();
var_dump($bike); // then, another dump.
$bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
$bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
$bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->setColor('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->setColor('black');
$tornado->forward();

var_dump($rockrider);
var_dump($tornado);
var_dump($bike);

// Instanciation d'un nouvel objet $car
$car = new car('blue');
$car->start();
$car->forward();
$car->brake();

var_dump($car);

// Instanciation d'un nouvel objet $bigCar
$bigCar = new car('grey', 7, 'diesel');
$bigCar->start(-100);
$bigCar->start(100);
$bigCar->brake(80);
$bigCar->forward(90);
$bigCar->start(-100);
$bigCar->brake(150);
$bigCar->brake(-100);
$bigCar->forward(90);
$bigCar->forward(-100);


