<?php

namespace package\Visitor;

/**
 * 扮演 Element
 * 一定要确定好 Element 派生类改动少，访问者不确定，派生类改动大，才使用访问模式
 * Class Employee
 * @package package\Visitor
 */
abstract class Employee
{
    protected $name;
    protected $work_time;


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getWorkTime()
    {
        return $this->work_time;
    }

    // 以访问者为参数
    abstract public function accept(Department $department);
}
