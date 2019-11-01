<?php

namespace Engin;

//require_once 'HighWay.php';

final class ResidentialWay extends HighWay {
        // var int
        protected $nbLane=2;
        // var int
        protected $currentVehiclesmaxSpeed=50;

        public function addVehicle($Vehicle)
        {
            $this->setcurrentVehicles($Vehicle);
        }
}