<?php

namespace package\Facade;

class AirConditioner implements CanSwitch
{

    public function on()
    {
        return '空调开启';
    }

    public function off()
    {
        return '空调关闭';
    }
}
