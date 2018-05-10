<?php

namespace package\State;

class MorningState extends State
{

    public function writeProgram(Work $work)
    {
        if ($work->getHours() < 12) {
            return "当前时间：{$work->getHours()} 点，上午工作，精神百倍";
        } else {
            // 超过12点，转入中午状态
            $work->setState(new NoonState());
            return $work->writeProgram();
        }
    }
}
