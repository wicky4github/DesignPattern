<?php

namespace package\Composite;

/**
 * 扮演 Composite 子部件
 * Class ConcreteCompany 具体公司
 * @package package\Composite
 */
class ConcreteCompany extends Company
{
    private $children = [];

    public function add(Company $company)
    {
        $this->children[] = $company;
    }

    public function remove(Company $company)
    {
        foreach ($this->children as $k => $child) {
            if ($child == $company) {
                unset($this->children[$k]);
                break;
            }
        }
    }

    public function display($depth)
    {
        echo '<p>' . str_repeat('——', $depth) . $this->name . '</p>';
        /**
         * @var Company $child
         */
        foreach ($this->children as $child) {
            echo '<p>' . $child->display($depth + 2) . '</p>';
        }
    }

    public function duty()
    {
        /**
         * @var Company $child
         */
        foreach ($this->children as $child) {
            echo '<p>' . $child->duty() . '</p>';
        }
    }
}
