<?php

namespace package\State;

class RestState extends State
{

    public function writeProgram(Work $work)
    {
        return "当前时间：{$work->getHours()} 点，下班回家！";
    }
}
