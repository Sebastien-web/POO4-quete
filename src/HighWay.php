<?php

namespace Engin;

abstract class HighWay {

    // var array
    protected $currentVehicles;
    // var int
    protected $nbLane;
    // var int
    protected $currentVehiclesmaxSpeed;

    public function getcurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setcurrentVehicles($vehicle): void
    {
        $this->currentVehicles[] = $vehicle;
    }

    public function getnbLane(): int
    {
        return $this->nbLane;
    }

    public function setnbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getcurrentVehiclesmaxSpeed(): int
    {
        return $this->currentVehiclesmaxSpeed;
    }

    public function setcurrentVehiclesmaxSpeed(int $currentVehiclesmaxSpeed): void
    {
        $this->currentVehiclesmaxSpeed = $currentVehiclesmaxSpeed;
    }

    abstract function addVehicle($Vehicle);

}