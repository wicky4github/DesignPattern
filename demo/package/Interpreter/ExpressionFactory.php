<?php

namespace package\Interpreter;

class ExpressionFactory
{
    private static $expressions = [];

    /**
     * @param $key
     * @return Expression
     * @throws \Exception
     */
    public static function getExpression($key)
    {
        switch ($key) {
            case "O":
                $expression = self::getExpressionInstance('Scale');
                break;
            case 'T':
                $expression = self::getExpressionInstance('Speed');
                break;
            case 'C':
            case 'D':
            case 'E':
            case 'F':
            case 'G':
            case 'A':
            case 'B':
            case 'P':
                $expression = self::getExpressionInstance('Note');
                break;
            default:
                $expression = self::getExpressionInstance('Unknown');
        }
        return $expression;
    }

    private static function getExpressionInstance($key)
    {
        if (self::$expressions[$key] == null) {
            // 注意带命名空间生成实例
            $class = '\\' . __NAMESPACE__ . '\\' . $key;
            self::$expressions[$key] = new $class;
        }
        return self::$expressions[$key];
    }
}
