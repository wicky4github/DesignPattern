<?php

namespace package\FactoryMethod;

interface OperationFactory
{
    /**
     * @return \package\SimpleFactory\Operation
     */
    public function createOperation();
}
