<?php

namespace package\Interpreter;

/**
 * 扮演 Terminal Expression 终结符表达式
 * Class Speed 音速类
 * @package package\Interpreter
 */
class Speed extends Expression
{

    public function execute($key, $value)
    {
        if ($value < 500) {
            $speed = '快速';
        } elseif ($value >= 1000) {
            $speed = '慢速';
        } else {
            $speed = '中速';
        }
        return $speed;
    }
}
