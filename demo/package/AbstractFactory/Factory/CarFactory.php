<?php

namespace package\AbstractFactory\Factory;


/**
 * 扮演 Abstract Factory
 * Interface CarFactory
 * @package package\AbstractFactory\Factory
 */
interface CarFactory
{
    public function installAirConditioner();
    public function installEngine();
}
