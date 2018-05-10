<?php

namespace package\AbstractFactory\Factory;

/**
 * 扮演 Abstract Factory
 * class CarFactory
 * @package package\AbstractFactory\Factory
 */
abstract class CarFactory
{
    abstract public function installAirConditioner();
    abstract public function installEngine();
}
