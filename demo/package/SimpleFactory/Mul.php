<?php

namespace package\SimpleFactory;

class Mul extends Operation
{

    public function getResult()
    {
        return $this->num1 * $this->num2;
    }
}
