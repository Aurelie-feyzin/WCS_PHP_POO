<?php


class ElectricBike extends Vehicle implements RechargeableInterface
{

    public function charge(int $percentage) :int
    {
        $newCharge = $percentage + 10;
        return $newCharge <= 100 ? $newCharge : 100;
    }

    public function unLoad(int $percentage) :int
    {
        $newCharge = $percentage - 10;
        return $newCharge > 0 ? $newCharge : 0;
    }

}
