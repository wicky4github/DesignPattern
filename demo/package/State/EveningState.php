<?php

namespace package\State;

class EveningState extends State
{

    public function writeProgram(Work $work)
    {
        if ($work->getFinished()) {
            // 工作完成，设置为休息状态
            $work->setState(new RestState());
            return $work->writeProgram();
        } else {
            if ($work->getHours() <= 21) {
                return "当前时间：{$work->getHours()} 点，加班工作，非常疲惫！";
            } else {
                // 超过21点，设置睡眠状态
                $work->setState(new SleepingState());
                return $work->writeProgram();
            }
        }
    }
}
