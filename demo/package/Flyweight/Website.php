<?php

namespace package\Flyweight;

/**
 * 扮演 Flyweight 享元超类
 * Class Website
 * @package package\Flyweight
 */
abstract class Website
{
    // 不共享的外部数据
    abstract public function useWebsite(User $user);
}
