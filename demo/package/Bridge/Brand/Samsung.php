<?php

namespace package\Bridge\Brand;

/**
 * 扮演 RefinedAbstraction 被提炼的抽象
 * Class Samsung
 * @package package\Bridge\Brand
 */
class Samsung extends Mobile
{

    public function runSoft()
    {
        echo '启用三星手机运行环境' . '<br>';
        echo $this->soft->run() . '<br>';
    }
}
