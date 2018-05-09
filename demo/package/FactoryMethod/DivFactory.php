<?php

namespace package\FactoryMethod;

class DivFactory implements OperationFactory
{

    /**
     * @return \package\SimpleFactory\Operation
     */
    public function createOperation()
    {
        return new \package\SimpleFactory\Div();
    }
}
