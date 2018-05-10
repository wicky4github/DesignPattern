<?php

namespace package\Bridge\Software;

/**
 * 派生类 具体实现
 * Class Contact
 * @package package\Bridge\Software
 */
class Contact extends Software
{

    public function run()
    {
        echo '运行通讯录' . '<br>';
    }
}
