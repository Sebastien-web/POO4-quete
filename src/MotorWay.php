<?php

namespace Engin;

//require_once 'HighWay.php';

final class MotorWay extends HighWay {
        // var int
        protected $nbLane=4;
        // var int
        protected $currentVehiclesmaxSpeed=130;

        public function addVehicle($Vehicle){
            if ($vehicle instanceof Car) 
            {
                $this->setcurrentVehicles($Vehicle);
            }
        }
}