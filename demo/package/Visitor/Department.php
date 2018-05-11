<?php

namespace package\Visitor;

/**
 * 扮演 Visitor
 * 要注意这里的抽象方法一定要确定好 Element 的派生类少或者改动很少，Visitor 子类多才使用访问者模式
 * Class Department
 * @package package\Visitor
 */
abstract class Department
{
    abstract public function visitFullTime(FullTimeEmployee $employee);

    abstract public function visitPartTime(PartTimeEmployee $employee);
}
