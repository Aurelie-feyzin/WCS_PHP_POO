<?php

require_once 'Vehicle.php';
require_once 'Motorized.php';
require_once 'LightableInterface.php';

class Car extends Motorized implements LightableInterface
{
    /**
     * @var bool;
     */
    protected $light;

    public function switchOn(): bool
    {
        return $this->light = true;
    }

    public function switchOff(): bool
    {
        return $this->light = false;
    }
}
