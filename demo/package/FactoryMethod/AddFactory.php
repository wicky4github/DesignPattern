<?php

namespace package\FactoryMethod;

class AddFactory implements OperationFactory
{
    /**
     * @return \package\SimpleFactory\Operation
     */
    public function createOperation()
    {
        return new \package\SimpleFactory\Add();
    }
}
