<?php

namespace package\Facade;

class Fan implements CanSwitch
{

    public function on()
    {
        return '风扇开启';
    }

    public function off()
    {
        return '风扇关闭';
    }
}
