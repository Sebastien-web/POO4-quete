<?php

namespace Engin;

//require_once 'HighWay.php';

final class PedestrianWay extends HighWay {
        // var int
        protected $nbLane=1;
        // var int
        protected $currentVehiclesmaxSpeed=10;

        public function addVehicle($vehicle){
            if (($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard)) 
            {
                $this->setcurrentVehicles($vehicle);
            }
        }
}