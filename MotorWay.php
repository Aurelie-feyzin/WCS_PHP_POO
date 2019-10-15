<?php

require_once 'HighWay.php';
final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->setMaxSpeed(130);
        $this->setNbLane(4);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $vehicles = $this->getCurrentVehicles() ?? [];
        if (!in_array($vehicle, $vehicles) && ($vehicle instanceof Car || $vehicle instanceof Truck )) {
            array_push($vehicles, $vehicle);
            $this->setCurrentVehicles($vehicles);
        }
    }
}
