<?php

namespace package\Adapter;

/**
 * 扮演 Adaptee 需要适配的类（不能或者难以修改）
 * Class Voltage220 220V交流电
 * @package package\Adapter
 */
class Voltage220
{
    protected $voltage = 220;

    public function output220V()
    {
        return "输出{$this->voltage}交流电";
    }

    /**
     * @return int
     */
    public function getVoltage()
    {
        return $this->voltage;
    }
}
