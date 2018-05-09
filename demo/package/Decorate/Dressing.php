<?php

namespace package\Decorate;

/**
 * 扮演 Decorator
 * Class Dressing
 * @package package\Decorate
 */
abstract class Dressing implements Coffee
{
    private $Coffee;

    /**
     * Dressing constructor.
     * @param Coffee $coffee A Concrete Component
     */
    public function __construct(Coffee $coffee)
    {
        $this->Coffee = $coffee;
    }

    public function cost()
    {
        return $this->Coffee->cost();
    }
}
