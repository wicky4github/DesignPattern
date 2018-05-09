<?php

namespace package\SimpleFactory;

class OperationFactory
{
    /**
     * @param $operation
     * @return Operation
     * @throws \Exception
     */
    public function createOperation($operation)
    {
        $obj = null;
        switch ($operation) {
            case '+':
                $obj = new Add();
                break;
            case '-':
                $obj = new Sub();
                break;
            case '*':
                $obj = new Mul();
                break;
            case '/':
                $obj = new Div();
                break;
            default:
                throw new \Exception("未知操作运算符：$operation");
                break;
        }
        return $obj;
    }
}
