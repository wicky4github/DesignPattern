<?php

namespace package\SimpleFactory;

abstract class Operation
{
    public $num1 = 0;
    public $num2 = 0;

    abstract public function getResult();
}
