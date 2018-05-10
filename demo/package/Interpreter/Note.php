<?php

namespace package\Interpreter;

/**
 * 扮演 Terminal Expression 终结符表达式
 * Class Note 音符类
 * @package package\Interpreter
 */
class Note extends Expression
{

    public function execute($key, $value)
    {
        // var_dump($key .':'. $value);
        $note = '';
        switch ($key) {
            case 'C':
                $note = 1;
                break;
            case 'D':
                $note = 2;
                break;
            case 'E':
                $note = 3;
                break;
            case 'F':
                $note = 4;
                break;
            case 'G':
                $note = 5;
                break;
            case 'A':
                $note = 6;
                break;
            case 'B':
                $note = 7;
                break;
            case 'P':
                $note = '——';
                break;
        }
        if ($value < 1) {
            if ($value >= 0.5) {
                $note = "<span style='border-bottom: 1px solid black;'>" . $note . "</span>";
            } else {
                $note = "<span style='border-bottom: 3px double black;'>" . $note . "</span>";
            }
        } elseif ($value > 1) {
            $note .= str_repeat(' -', intval($value - 1));
        }
        return $note;
    }
}
