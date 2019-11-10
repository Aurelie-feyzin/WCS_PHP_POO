<?php declare(strict_types=1);

require_once 'Vehicle.php';
require_once 'Motorized.php';
require_once 'LightableInterface.php';

class Car extends Motorized implements LightableInterface
{
    /**
     * @var bool;
     */
    protected $light;

    /**
     * @var bool;
     */
    private $hasParkBrake = true;

    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        return $this->light = true;
    }

    /**
     * @return bool
     */
    public function switchOff(): bool
    {
        return $this->light = false;
    }

    /**
     * @throws ErrorException
     */
    public function start(){
            if ($this->isParkBrake()) {
                throw new ErrorException('Oups, frein à main oublié...<br>');
            }
    }

    /**
     * @return bool
     */
    public function isParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    /**
     * @param bool $hasParkBrake
     * @return Car
     */
    public function setParkBrake(bool $hasParkBrake): Car
    {
        $this->hasParkBrake = $hasParkBrake;
        return $this;
    }
}
