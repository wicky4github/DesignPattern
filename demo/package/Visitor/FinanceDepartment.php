<?php

namespace package\Visitor;

/**
 * Concrete Element
 * Class FinanceDepartment 财务部
 * @package package\Visitor
 */
class FinanceDepartment extends Department
{
    // 实现财务部对全职员工数据的访问
    public function visitFullTime(FullTimeEmployee $employee)
    {
        $work_time = $employee->getWorkTime();
        if ($work_time > 40) {
            // 加班费每小时50元
            $salary = $employee->getWeeklyWage() + ($work_time - 40) * 50;
        } else {
            // 请假每小时扣80元
            $salary = $employee->getWeeklyWage() - (40 - $work_time) * 80;
        }
        if ($salary < 0) {
            $salary = 0;
        }
        return "正式员工：{$employee->getName()} 实际工资为：{$salary}元";
    }

    // 实现财务部对兼职员工数据的访问
    public function visitPartTime(PartTimeEmployee $employee)
    {
        $salary = $employee->getHoursWage() * $employee->getWorkTime();
        return "临时工：{$employee->getName()} 实际工资为：{$salary}元";
    }
}
