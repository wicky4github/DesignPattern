<?php

namespace package\FactoryMethod;

class SubFactory implements OperationFactory
{
    /**
     * @return \package\SimpleFactory\Operation
     */
    public function createOperation()
    {
        return new \package\SimpleFactory\Sub();
    }
}
