<?php

namespace package\Strategy;

/**
 * 正常收费
 * Class CashNormal
 * @package package\Strategy
 */
class CashNormal extends Cash
{

    public function acceptCash($money)
    {
        return $money;
    }
}
