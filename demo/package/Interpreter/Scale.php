<?php

namespace package\Interpreter;

/**
 * 扮演 Terminal Expression 终结符表达式
 * Class Scale 音阶类
 * @package package\Interpreter
 */
class Scale extends Expression
{

    public function execute($key, $value)
    {
        $scale = '';
        switch ($value) {
            case 1:
                $scale = '低音';
                break;
            case 2:
                $scale = '中音';
                break;
            case 3:
                $scale = '高音';
                break;
        }
        return $scale;
    }
}
