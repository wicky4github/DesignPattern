<?php

namespace package\Proxy;

/**
 * 扮演 Client
 * Class Girl 客户端
 * @package package\Proxy
 */
class Girl
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
