<?php

namespace package\Composite;

/**
 * 扮演 Leaf 叶节点
 * Class HRDepartment 人力资源部
 * @package package\Composite
 */
class HRDepartment extends Company
{

    public function add(Company $company)
    {
        // 叶节点不需要实现这个方法
    }

    public function remove(Company $company)
    {
        // 叶节点不需要实现这个方法
    }

    public function display($depth)
    {
        return str_repeat('——', $depth) . $this->name;
    }

    public function duty()
    {
        return '【' . $this->name . '】员工招聘培训管理';
    }
}
