<?php

require_once 'HighWay.php';
final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->setMaxSpeed(10);
        $this->setNbLane(1);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $vehicles = $this->getCurrentVehicles() ?? [];
        if (!in_array($vehicle, $vehicles) && ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard)) {
            array_push($vehicles, $vehicle);
            $this->setCurrentVehicles($vehicles);
        }
    }
}
