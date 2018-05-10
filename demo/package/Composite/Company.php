<?php

namespace package\Composite;

/**
 * 扮演 Component 组件
 * Class Company 抽象公司
 * @package package\Composite
 */
abstract class Company
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function add(Company $company);

    abstract public function remove(Company $company);

    abstract public function display($depth);

    abstract public function duty();
}
