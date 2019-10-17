<?php


class chargingStation
{
    public function fullCharge(RechargeableInterface $vehicle)
    {
        $vehicle->charge(100);
    }
}
