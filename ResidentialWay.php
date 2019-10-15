<?php

require_once 'HighWay.php';
final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        $this->setMaxSpeed(50);
        $this->setNbLane(2);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $vehicles = $this->getCurrentVehicles() ?? [];
        if (!in_array($vehicle, $vehicles)) {
            array_push($vehicles, $vehicle);
            $this->setCurrentVehicles($vehicles);
        }
    }
}
