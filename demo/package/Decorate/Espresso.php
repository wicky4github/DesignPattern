<?php

namespace package\Decorate;

/**
 * 扮演 ConcreteComponent
 * Class Espresso
 * @package package\Decorate
 */
class Espresso implements Coffee
{
    public static $cost = 2.5;

    public function cost()
    {
        return self::$cost;
    }
}
