<?php

namespace package\Bridge\Software;

/**
 * 派生类 具体实现
 * Class Game
 * @package package\Bridge\Software
 */
class Game extends Software
{

    public function run()
    {
        echo '运行游戏' . '<br>';
    }
}
