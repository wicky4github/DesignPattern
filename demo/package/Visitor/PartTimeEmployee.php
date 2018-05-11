<?php

namespace package\Visitor;

/**
 * Concrete Element
 * Class PartTimeEmployee
 * @package package\Visitor
 */
class PartTimeEmployee extends Employee
{
    private $hours_wage;

    /**
     * PartTimeEmployee constructor.
     * @param $name
     * @param $hours_wage
     * @param $work_time
     */
    public function __construct($name, $hours_wage, $work_time)
    {
        $this->name = $name;
        $this->hours_wage = $hours_wage;
        $this->work_time = $work_time;
    }

    /**
     * @return mixed
     */
    public function getHoursWage()
    {
        return $this->hours_wage;
    }


    public function accept(Department $department)
    {
        // 调用访问者对应方法，并把本对象传入
        return $department->visitPartTime($this);
    }
}
