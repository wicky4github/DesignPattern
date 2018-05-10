<?php

namespace package\AbstractFactory\Engine;

/**
 * 扮演 Product B
 * Class WEngine
 * @package package\AbstractFactory\Engine
 */
class WEngine extends Engine
{

    public function work()
    {
        return 'W型发动机运行中...';
    }
}
