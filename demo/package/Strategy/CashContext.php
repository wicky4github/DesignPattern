<?php

namespace package\Strategy;

/**
 * 上下文
 * Class CashContext
 * @package package\Strategy
 */
class CashContext
{
    /**
     * @var Cash $Cash 计算策略
     */
    protected $Cash;

    /**
     * CashContext constructor.
     * @param $type
     * @throws \Exception
     */
    public function __construct($type)
    {
        // 简单工厂： 创建策略
        switch ($type) {
            case '正常收费':
                $this->Cash = new CashNormal();
                break;
            case '满300返100':
                $this->Cash = new CashReturn(300, 100);
                break;
            case '打8折':
                $this->Cash = new CashRebate(0.8);
                break;
            default:
                throw new \Exception("未知计算方式：$type");
        }
    }

    public function getResult($money)
    {
        return round($this->Cash->acceptCash($money), 2);
    }
}
