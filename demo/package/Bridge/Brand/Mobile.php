<?php

namespace package\Bridge\Brand;

use package\Bridge\Software\Software;

/**
 * 扮演 Abstraction 抽象
 * Class Mobile
 * @package package\Bridge\Brand
 */
abstract class Mobile
{
    /**
     * @var Software $soft
     */
    protected $soft;

    /**
     * @param Software $soft
     */
    public function setSoft(Software $soft)
    {
        $this->soft = $soft;
    }

    // 桥接方法，由子类实现
    abstract public function runSoft();
}
