<?php

namespace package\TemplateMethod;

class TestPaperA extends TestPaper
{

    protected function answer1()
    {
        return '你好吗？';
    }

    protected function answer2()
    {
        return '你多大了？';
    }
}
