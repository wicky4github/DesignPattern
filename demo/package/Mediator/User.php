<?php

namespace package\Mediator;

/**
 * 扮演 Colleague 同事类
 * Class User
 * @package package\Mediator
 */
class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function showMessage($message = '')
    {
        return ChatRoom::showMessage($this, $message);
    }
}
