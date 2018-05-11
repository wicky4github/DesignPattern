<?php

namespace package\Visitor;

/**
 * 扮演 Object Structure 对象结构 提供高层的接口允许访问者访问它的元素
 * Class EmployeeList
 * @package package\Visitor
 */
class EmployeeList
{
    private $employee_list = [];

    public function addEmployee(Employee $employee)
    {
        $this->employee_list[] = $employee;
    }

    public function acceptDepartment(Department $department)
    {
        /**
         * @var Employee $employee
         */
        foreach ($this->employee_list as $employee) {
            echo $employee->accept($department) . '<br>';
        }
    }
}
