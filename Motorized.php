<?php

require_once 'Vehicle.php';
class Motorized extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * Motorized constructor.
     * @param $color
     * @param int $nbSeats
     * @param mixed $energy
     */
    public function __construct($color, $nbSeats = 4, $energy = self::ALLOWED_ENERGIES[0])
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Motorized
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
}
