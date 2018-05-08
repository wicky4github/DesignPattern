<?php

namespace package\SimpleFactory;

class Add extends Operation
{
    public function getResult()
    {
        return $this->num1 + $this->num2;
    }
}
