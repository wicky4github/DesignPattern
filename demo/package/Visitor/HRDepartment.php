<?php

namespace package\Visitor;

/**
 * Concrete Visitor
 * Class HRDepartment 人力资源部
 * @package package\Visitor
 */
class HRDepartment extends Department
{
    // 实现财务部对全职员工数据的访问
    public function visitFullTime(FullTimeEmployee $employee)
    {
        $work_time = $employee->getWorkTime();
        $str = "正式员工：{$employee->getName()} 实际工作时间为：{$work_time}小时";
        $extra = '';
        if ($work_time > 40) {
            $add = $work_time - 40;
            $extra = "，加班时间：{$add}小时";
        } elseif ($work_time < 40) {
            $reduce = 40 - $work_time;
            $extra = "，请假时间：{$reduce}小时";
        }
        return $str . $extra;
    }

    // 实现财务部对兼职员工数据的访问
    public function visitPartTime(PartTimeEmployee $employee)
    {
        return "临时工：{$employee->getName()} 实际工作时间为：{$employee->getWorkTime()}小时";
    }
}
