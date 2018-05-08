<?php

namespace package\SimpleFactory;

class Sub extends Operation
{

    public function getResult()
    {
        return $this->num1 - $this->num2;
    }
}
