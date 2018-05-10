<?php

namespace package\ChainOfResponsibility;

/**
 * 扮演 Handler
 * Class Handler 管理者
 * @package package\ChainOfResponsibility
 */
abstract class Handler
{
    /**
     * 上级管理员
     * @var Handler $superior
     */
    protected $superior;

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 设置上级
     * @param Handler $superior
     */
    public function setSuperior(Handler $superior)
    {
        $this->superior = $superior;
    }

    // 处理申请
    abstract public function handleApplication(Application $application);
}
