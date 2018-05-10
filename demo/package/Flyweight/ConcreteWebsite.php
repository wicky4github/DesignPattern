<?php

namespace package\Flyweight;

/**
 * 具体享元实例
 * Class ConcreteWebsite
 * @package package\Flyweight
 */
class ConcreteWebsite extends Website
{
    private $category;

    public function __construct($category)
    {
        $this->category = $category;
    }

    public function useWebsite(User $user)
    {
        return '网站类型：' . $this->category . '，用户：' . $user->getName();
    }
}
