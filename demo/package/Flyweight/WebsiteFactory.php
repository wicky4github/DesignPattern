<?php

namespace package\Flyweight;

/**
 * 扮演 FlyweightFactory 享元工厂
 * Class WebsiteFactory
 * @package package\Flyweight
 */
class WebsiteFactory
{
    private $websites = [];

    /**
     * @param $category
     * @return Website
     */
    public function getWebsite($category)
    {
        if (!array_key_exists($category, $this->websites)) {
            $this->websites[$category] = new ConcreteWebsite($category);
        }
        return $this->websites[$category];
    }

    public function getCount()
    {
        return count($this->websites);
    }
}
