<?php

namespace package\Facade;

class Light implements CanSwitch
{

    public function on()
    {
        return '电灯开启';
    }

    public function off()
    {
        return '电灯关闭';
    }
}
