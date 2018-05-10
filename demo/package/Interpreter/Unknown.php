<?php

namespace package\Interpreter;

/**
 * 扮演 Terminal Expression 终结符表达式
 * Class Unknown
 * @package package\Interpreter
 */
class Unknown extends Expression
{

    public function execute($key, $value)
    {
        return "(Unknown: $key)";
    }
}
