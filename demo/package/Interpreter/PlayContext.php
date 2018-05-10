<?php

namespace package\Interpreter;

/**
 * 扮演 Context
 * Class PlayContext
 * @package package\Interpreter
 */
class PlayContext
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
