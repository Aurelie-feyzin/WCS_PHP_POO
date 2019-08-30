<?php


class Bicycle
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var integer
     */
    private $nbSeats = 1;
    /**
     * @var integer
     */
    private $nbWheels = 2;

    /**
     * @var bool
     */
    private $hasLuggageRack;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        } else {
            $this->currentSpeed = 0;
        }
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @param int $nbSeats
     */
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    /**
     * @return bool
     */
    public function isHasLuggageRack(): bool
    {
        return $this->hasLuggageRack;
    }

    /**
     * @param bool $hasLuggageRack
     */
    public function setHasLuggageRack(bool $hasLuggageRack): void
    {
        $this->hasLuggageRack = $hasLuggageRack;
    }

    public function forward()
    {
        $this->currentSpeed = 15;
        echo "Go !";
    }

    public function brake()
    {
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            echo "Brake !!!";
        }

        echo "I'm stopped !";
    }
}
