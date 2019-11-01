<?php

namespace Engin;

//require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private $load=0;
    private $loadCapacity;
    private $energy;



    public function __construct(string $color, int $nbSeats,int $loadCapacity,int $energy)
    {
        parent::__construct($color,$nbSeats);
        $this->loadCapacity = $loadCapacity;
        $this->energy = $energy;
    }

    public function fill(): string
    {
        $sentence = "";
        while ($this->load < $this->loadCapacity) {
            $this->load++;
            $sentence .= "Filling...";
        }

        $sentence .= "Full !";
        return $sentence;
    }

    public function checkLoad(): string
    {
        if ($this->load < $this->loadCapacity) $sentence='in filling';
        else $sentence='full';
        return $sentence;
    }

    public function getload(): int
    {
        return $this->load;
    }

    public function setload(int $load): void
    {
        $this->load = $load;
    }

    public function getloadCapacity(): int
    {
        return $this->loadCapacity;
    }

    public function setloadCapacity(int $loadCapacity): void
    {
        $this->loadCapacity = $loadCapacity;
    }

    public function getenergy(): int
    {
        return $this->energy;
    }

    public function setenergy(int $energy): void
    {
        $this->energy = $energy;
    }

}