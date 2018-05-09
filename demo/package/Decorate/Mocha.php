<?php

namespace package\Decorate;

/**
 * 扮演 ConcreteDecorator
 * Class Mocha
 * @package package\Decorate
 */
class Mocha extends Dressing
{
    public static $cost = 0.5;

    public function cost()
    {
        return parent::cost() + self::$cost;
    }
}
