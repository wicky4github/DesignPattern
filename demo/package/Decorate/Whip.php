<?php

namespace package\Decorate;

/**
 * 扮演 ConcreteDecorator
 * Class Whip
 * @package package\Decorate
 */
class Whip extends Dressing
{
    public static $cost = 0.1;

    public function cost()
    {
        return parent::cost() + self::$cost;
    }
}
