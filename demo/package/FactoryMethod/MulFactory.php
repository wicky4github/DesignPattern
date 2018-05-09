<?php

namespace package\FactoryMethod;

class MulFactory implements OperationFactory
{
    /**
     * @return \package\SimpleFactory\Operation
     */
    public function createOperation()
    {
        return new \package\SimpleFactory\Mul();
    }
}
