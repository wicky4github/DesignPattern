<?php

namespace package\Visitor;

/**
 * Concrete Element
 * Class FullTimeEmployee
 * @package package\Visitor
 */
class FullTimeEmployee extends Employee
{
    private $weekly_wage;

    /**
     * FullTimeEmployee constructor.
     * @param $name
     * @param $weekly_wage
     * @param $work_time
     */
    public function __construct($name, $weekly_wage, $work_time)
    {
        $this->name = $name;
        $this->weekly_wage = $weekly_wage;
        $this->work_time = $work_time;
    }

    /**
     * @return mixed
     */
    public function getWeeklyWage()
    {
        return $this->weekly_wage;
    }


    public function accept(Department $department)
    {
        // 调用访问者对应方法，并把本对象传入
        return $department->visitFullTime($this);
    }
}
