<?php

namespace package\TemplateMethod;

abstract class TestPaper
{
    public function question1()
    {
        echo "1. 翻译：\"How are you?\"";
        echo "<br>　回答：",$this->answer1();
    }

    public function question2()
    {
        echo "2. 翻译：\"How old are you?\"";
        echo "<br>　回答：",$this->answer2();
    }

    abstract protected function answer1();

    abstract protected function answer2();
}
