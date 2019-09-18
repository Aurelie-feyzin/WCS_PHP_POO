<?php

require_once 'Vehicle.php';
require_once 'Motorized.php';

class Truck extends Motorized
{
    /**
     * @var integer
     */
    private $storageCapacity;

    /**
     * @var integer
     */
    private $currentStorage;

    public function __construct(string $color, int $nbSeats, string $energy, $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setStorageCapacity($storageCapacity);
        $this->setCurrentStorage(0);
    }

    /**
     * @return int
     */
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    /**
     * @param int $storageCapacity
     */
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @return int
     */
    public function getCurrentStorage(): int
    {
        return $this->currentStorage;
    }

    /**
     * @param int $currentStorage
     */
    public function setCurrentStorage(int $currentStorage): void
    {
        if ($currentStorage >= 0 && $currentStorage <= $this->getStorageCapacity()) {
            $this->currentStorage = $currentStorage;
        } else {
            echo "ìnvalid loading : $currentStorage <br>";
        }
    }

    public function isFull() {
       echo $this->getCurrentStorage() === $this->getStorageCapacity() ?  'full<br>' : 'in filling<br>';
    }
}
