<?php

namespace package\AbstractFactory\Conditioner;

/**
 * 扮演 Product A
 * Class HaierAirConditioner
 * @package package\AbstractFactory\Conditioner
 */
class HaierAirConditioner extends AirConditioner
{

    public function work()
    {
        return '海尔空调运行中...';
    }
}
