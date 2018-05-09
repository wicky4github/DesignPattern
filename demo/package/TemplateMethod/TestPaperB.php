<?php

namespace package\TemplateMethod;

class TestPaperB extends TestPaper
{

    protected function answer1()
    {
        return '怎么是你？';
    }

    protected function answer2()
    {
        return '怎么老是你？';
    }
}
