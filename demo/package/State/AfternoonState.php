<?php

namespace package\State;

class AfternoonState extends State
{

    public function writeProgram(Work $work)
    {
        if ($work->getHours() < 18) {
            return "当前时间：{$work->getHours()} 点，下午状态不错，继续努力工作！";
        } else {
            // 超过18点，进入晚上
            $work->setState(new EveningState());
            return $work->writeProgram();
        }
    }
}
