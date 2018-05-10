<?php

namespace package\Bridge\Brand;

/**
 * 扮演 RefinedAbstraction 被提炼的抽象
 * Class Huawei
 * @package package\Bridge\Brand
 */
class Huawei extends Mobile
{

    public function runSoft()
    {
        echo '启用华为手机运行环境' . '<br>';
        echo $this->soft->run() . '<br>';
    }
}
