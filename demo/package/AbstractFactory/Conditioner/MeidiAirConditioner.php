<?php

namespace package\AbstractFactory\Conditioner;

/**
 * 扮演 Product B
 * Class MeidiAirConditioner
 * @package package\AbstractFactory\Conditioner
 */
class MeidiAirConditioner extends AirConditioner
{

    public function work()
    {
        return '美的空调运行中...';
    }
}
