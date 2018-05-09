<?php

namespace package\Strategy;

/**
 * 返利收费
 * Class CashReturn
 * @package package\Strategy
 */
class CashReturn extends Cash
{
    protected $condition;
    protected $return;

    /**
     * CashReturn constructor.
     * @param double $condition 返利条件
     * @param double $return    返利金额
     */
    public function __construct($condition, $return)
    {
        $this->condition = $condition;
        $this->return = $return;
    }

    public function acceptCash($money)
    {
        return $money >= $this->condition
            ? $money - ($money / $this->condition) * $this->return
            : $money;
    }
}
