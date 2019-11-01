<?php
require_once '../vendor/autoload.php';

$kingsWay = new Engin\MotorWay();
$princessStreet = new Engin\ResidentialWay();
$sunLane = new Engin\PedestrianWay();
$simca = new Engin\Car('blue', 3, 'electric');
$renault = new Engin\Car('green', 3, 'electric');
$peugeot = new Engin\Bicycle('green',1);

$peugeot->setCurrentSpeed(5);
echo 'vitesse vélo : ' .$peugeot->getCurrentSpeed() . '<br>'; 
$peugeot->switchOn();
if ($peugeot->getLight()===true) echo 'lumière allumée' . '<br>'; else echo 'lumière éteinte' . '<br>';

$peugeot->setCurrentSpeed(11);
echo 'vitesse vélo : ' .$peugeot->getCurrentSpeed() . '<br>'; 
$peugeot->switchOn();
if ($peugeot->getLight()===true) echo 'lumière allumée' . '<br>'; else echo 'lumière éteinte' . '<br>';


if ($renault->getLight()===true) echo 'lumière voiture par défaut allumée' . '<br>'; else echo 'lumière voiture par défaut éteinte' . '<br>';
$renault->switchOn();
if ($renault->getLight()===true) echo 'lumière voiture allumée' . '<br>'; else echo 'lumière voiture éteinte' . '<br>';


$sunLane->addVehicle($simca);
$sunLane->addVehicle($peugeot);

var_dump($sunLane->getcurrentVehicles());

$princessStreet->addVehicle($simca);
$princessStreet->addVehicle($peugeot);

var_dump($princessStreet->getcurrentVehicles());
