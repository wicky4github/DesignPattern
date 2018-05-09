<?php

namespace package\Builder;

class ThinPersonBuilder extends PersonBuilder
{

    public function buildHead()
    {
        echo "<p>我来组成<b>瘦子</b>的头部</p>";
    }

    public function buildBody()
    {
        echo "<p>我来组成<b>瘦子</b>的身体</p>";
    }

    public function buildLeftArm()
    {
        echo "<p>我来组成<b>瘦子</b>的左手</p>";
    }

    public function buildRightArm()
    {
        echo "<p>我来组成<b>瘦子</b>的右手</p>";
    }

    public function buildLeftLeg()
    {
        echo "<p>我来组成<b>瘦子</b>的左腿</p>";
    }

    public function buildRightLeg()
    {
        echo "<p>我来组成<b>瘦子</b>的右腿</p>";
    }
}
