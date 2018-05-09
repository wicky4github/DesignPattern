<?php

namespace package\Strategy;

/**
 * 打折
 * Class CashRebate
 * @package package\Strategy
 */
class CashRebate extends Cash
{
    protected $rebate;

    /**
     * CashRebate constructor.
     * @param double $rebate 打折倍数
     */
    public function __construct($rebate = 1.0)
    {
        $this->rebate = $rebate;
    }

    public function acceptCash($money)
    {
        return $this->rebate * $money;
    }
}
