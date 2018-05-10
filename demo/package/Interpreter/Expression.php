<?php

namespace package\Interpreter;

/**
 * 扮演 Abstract Expression
 * 子类可有 终结符表达式/非终结符表达式
 * Class Expression
 * @package package\Interpreter
 */
abstract class Expression
{
    // 解释器
    public function interpret(PlayContext $context)
    {
        if (strlen($context->getText()) == 0) {
            return '';
        } else {
            preg_match('/^[A-Z]\s\d+\.?\d*$/', $context->getText(), $match);
            // $text => T 500 O 2 E 0.5
            // $key => T
            $key = substr($context->getText(), 0, 1);
            // $text => 500 O 2 E 0.5
            $context->setText(substr($context->getText(), 2));
            // $value => 500
            $value = substr(
                $context->getText(),
                0,
                $match ? 1 : strpos($context->getText(), " ")
            );
            // $text => O 2 E 0.5
            $context->setText(
                substr(
                    $context->getText(),
                    strpos($context->getText(), " ") + 1
                )
            );
            return $this->execute($key, $value);
        }
    }

    // 执行
    abstract public function execute($key, $value);
}
