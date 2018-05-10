<?php

namespace package\Adapter;

/**
 * 扮演 Client 客户端
 * Class Mobile
 * @package package\Adapter
 */
class Mobile
{
    public function charging(Voltage5 $voltage5)
    {
        $arr = $voltage5->output5V();
        echo implode("<br>", $arr);
        echo '<br>';
        if ($voltage5->getVoltage() == 5) {
            echo "电压刚好5V，开始充电...";
        } else {
            echo "电压超过5V，瞬间爆炸！！！";
        }
        echo '<br>';
    }
}
