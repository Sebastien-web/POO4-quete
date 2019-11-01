<?php

namespace Engin;
  // Bicycle.php

  class Bicycle extends Vehicle implements LightableInterface
  {
    use getLight;
    public function switchOn():bool{
      if ($this->currentSpeed>10){
        return $this->light=true;
      }
      else return $this->light=false;
  }
    public function switchOff():bool{
      return $this->light=false;
  }
  }