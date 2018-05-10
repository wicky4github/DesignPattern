<?php

namespace package\Composite;

/**
 * 扮演 Leaf 叶节点
 * Class FinanceDepartment 财务部
 * @package package\Composite
 */
class FinanceDepartment extends Company
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
        return '【' . $this->name . '】财务收支管理';
    }
}
