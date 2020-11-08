<?php

require_once 'Vehicule.php';

class Car extends Vehicule
{

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $parkBrake;

    public function __construct(string $color, int $nbSeats, string $energy, bool $parkBrake)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->parkBrake = $parkBrake;
    }

    public function start() {
        if ($this->parkBrake === true) {
            throw new Exception("Remove park brake before leaving ! <br/>");
        }
        echo "Let's drive ! <br/>";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getParkBrake(): string
    {
        if ($this->parkBrake) {
            return 'park brake active <br/>';
        } return 'park brake off <br/>';
    }

    public function setParkBrake(bool $park): void
    {
        $this->parkBrake = $park;
    }

}


