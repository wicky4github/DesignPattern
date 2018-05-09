<?php

namespace package\Proxy;

/**
 * 扮演 Proxy
 * Class LaoWang 认识客户端
 * @package package\Proxy
 */
class LaoWang implements GiveGift
{
    protected $XiaoMing;

    public function __construct(Girl $girl)
    {
        $this->XiaoMing = new XiaoMing($girl);  // 让小明认识女孩
    }

    public function giveDolls()
    {
        return $this->XiaoMing->giveDolls();
    }

    public function giveFlowers()
    {
        return $this->XiaoMing->giveFlowers();
    }

    public function giveChocolate()
    {
        return $this->XiaoMing->giveChocolate();
    }
}
