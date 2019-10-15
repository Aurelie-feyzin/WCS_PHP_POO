<?php

abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles;

    /**
     * @var int
     */
    protected $nbLane;

    /**
     * @var int
     */
    protected $maxSpeed;

    /**
     * @return array
     */
    public function getCurrentVehicles(): ?array
    {
        return $this->currentVehicles;
    }

    /**
     * @param array $currentVehicles
     * @return HighWay
     */
    public function setCurrentVehicles(array $currentVehicles): HighWay
    {
        $this->currentVehicles = $currentVehicles;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     * @return HighWay
     */
    public function setNbLane(int $nbLane): HighWay
    {
        $this->nbLane = $nbLane;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     * @return HighWay
     */
    public function setMaxSpeed(int $maxSpeed): HighWay
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    abstract function addVehicle(Vehicle $vehicle);

}
