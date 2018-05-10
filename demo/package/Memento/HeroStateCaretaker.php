<?php

namespace package\Memento;

/**
 * 扮演 Caretaker 管理者
 * Class HeroStateCaretaker
 * @package package\Memento
 */
class HeroStateCaretaker
{
    private $mementos = [];

    public function setState(HeroStateMemento $memento, $key = '')
    {
        $this->mementos[$key] = $memento;
    }

    public function getState($key = '')
    {
        return $this->mementos[$key];
    }
}
