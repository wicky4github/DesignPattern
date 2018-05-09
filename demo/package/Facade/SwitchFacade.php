<?php

namespace package\Facade;

/**
 * 扮演 Facade
 * Class SwitchFacade 家居电器操作类
 * @package package\Facade
 */
class SwitchFacade
{
    private $light;
    private $air_conditioner;
    private $fan;
    private $television;
    private $night;

    public function __construct($night)
    {
        $this->light = new Light();
        $this->air_conditioner = new AirConditioner();
        $this->fan = new Fan();
        $this->television = new Television();
        $this->night = $night;
    }

    public function turnOn()
    {
        $arr = [];
        $arr[] = $this->air_conditioner->on();
        $arr[] = $this->fan->on();
        $arr[] = $this->television->on();
        if ($this->night) {
            // 晚上开电灯
            $arr[] = $this->light->on();
        }
        return $arr;
    }

    public function turnOff()
    {
        $arr = [];
        $arr[] = $this->air_conditioner->off();
        $arr[] = $this->fan->off();
        $arr[] = $this->television->off();
        if ($this->night) {
            $arr[] = $this->light->off();
        }
        return $arr;
    }
}
