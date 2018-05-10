<?php

namespace package\AbstractFactory\Engine;

/**
 * 扮演 Product B
 * Class VEngine
 * @package package\AbstractFactory\Engine
 */
class VEngine implements Engine
{

    public function work()
    {
        return 'V型发动机运行中...';
    }
}
