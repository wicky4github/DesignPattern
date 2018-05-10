<?php

namespace package\Command;

/**
 * 扮演 Command 抽象命令
 * Class MakeDish
 * @package package\Command
 */
abstract class MakeDish
{
    protected $chef;

    public function __construct(Chef $chef)
    {
        $this->chef = $chef;
    }

    // 子类实现命令执行方法
    abstract public function execute();
}
