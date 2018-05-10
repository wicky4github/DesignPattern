<?php

namespace package\Adapter;

class BadAdapter extends Voltage220 implements Voltage5
{

    public function output5V()
    {
        $arr = [];
        $arr[] = '开始适配电压..';
        $this->voltage = $this->voltage / 40;
        $arr[] = '适配完成输出电压：' . $this->voltage;
        $arr[] = parent::output220V();
        return $arr;
    }
}
