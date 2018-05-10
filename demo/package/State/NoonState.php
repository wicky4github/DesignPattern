<?php

namespace package\State;

class NoonState extends State
{

    public function writeProgram(Work $work)
    {
        if ($work->getHours() < 13) {
            return "当前时间：{$work->getHours()} 点，饿了，吃午饭，进行午休。";
        } else {
            // 超过13点，进入下午状态
            $work->setState(new AfternoonState());
            return $work->writeProgram();
        }
    }
}
