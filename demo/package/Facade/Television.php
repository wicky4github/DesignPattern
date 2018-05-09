<?php

namespace package\Facade;

class Television implements CanSwitch
{

    public function on()
    {
        return '电视开启';
    }

    public function off()
    {
        return '电视关闭';
    }
}
