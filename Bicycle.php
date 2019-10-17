<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    /**
     * @var bool;
     */
    protected $light;

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            return $this->light = true;
        }
        return $this->light = false;
    }

    public function switchOff(): bool
    {
       return $this->light = false;
    }
}
