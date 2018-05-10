<?php

namespace package\State;

class SleepingState extends State
{

    public function writeProgram(Work $work)
    {
        return "当前时间：{$work->getHours()} 点，不行了，睡着了！";
    }
}
