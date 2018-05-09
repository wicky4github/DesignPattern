<?php

namespace package\Prototype;

class Person
{
    use Cloneable;

    private $property;

    public function __construct()
    {
        $this->property = new Property();
    }

    /**
     * @return Property
     */
    public function getProperty()
    {
        return $this->property;
    }
}
