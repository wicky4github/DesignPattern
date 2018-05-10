<?php

namespace package\AbstractFactory\Factory;

use package\AbstractFactory\Conditioner\HaierAirConditioner;
use package\AbstractFactory\Engine\VEngine;

class BaomaFactory extends CarFactory
{

    public function installAirConditioner()
    {
        return new HaierAirConditioner();
    }

    public function installEngine()
    {
        return new VEngine();
    }
}
