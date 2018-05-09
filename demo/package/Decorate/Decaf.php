<?php

namespace package\Decorate;

/**
 * 扮演 ConcreteComponent
 * Class Decaf
 * @package package\Decorate
 */
class Decaf implements Coffee
{
    public static $cost = 2.0;

    public function cost()
    {
        return self::$cost;
    }
}
