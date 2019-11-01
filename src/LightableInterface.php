<?php

namespace Engin;

interface LightableInterface
{
    public function switchOn():bool;
    public function switchOff():bool;
}