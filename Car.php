<?php


class Car
{
    /** @var int */
    private $nbWheels;

    /** @var int */
    private $currentSpeed = 0;
    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function __construct($color, $nbSeats = 4, $energy = 'fuel')
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function forward(int $currentSpeed = 80)
    {
        if ($this->currentSpeed <= $currentSpeed ) {
            $this->currentSpeed = $currentSpeed;
            echo "Go (" . $this->getCurrentSpeed() . ")</br>";
        } else {
            echo "I'm sorry your speed low => your brake </br>";
            $this->brake($currentSpeed);
        }
    }

    public function brake(int $currentSpeed = 0)
    {
        if ($this->currentSpeed > $currentSpeed ) {
            while ($this->currentSpeed > $currentSpeed && $this->currentSpeed > 0) {
                $this->currentSpeed = $this->currentSpeed - 10 > 0 ? $this->currentSpeed - 10 : 0;
                echo "Brake !!! ";
            }
            echo " My new speed : " . $this->currentSpeed . "</br>";
        } else {
            echo "I'm sorry your speed high => your forward </br>";
            $this->forward($currentSpeed);
        }
    }


    public function start(int $currentSpeed = 50)
    {
        if ($this->getCurrentSpeed() === 0 &&  $currentSpeed > 0) {
            $this->currentSpeed =  $currentSpeed;
            echo "I'm started !  My speed : " .  $this->currentSpeed . "</br>";
        } else if ($this->getCurrentSpeed() > 0) {
            echo "I'm already started !!! </br>";
        } else {
            echo "I'am sorry already to 0 </br>";
        }
    }
}
