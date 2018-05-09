<?php

namespace package\Proxy;

/**
 * 扮演 RealSubject
 * Class XiaoMing 不认识客户端（需要通过代理认识）
 * @package package\Proxy
 */
class XiaoMing implements GiveGift
{
    private $girl;

    public function __construct(Girl $girl)
    {
        $this->girl = $girl;
    }

    public function giveDolls()
    {
        return "送{$this->girl->getName()}玩具！";
    }

    public function giveFlowers()
    {
        return "送{$this->girl->getName()}鲜花！";
    }

    public function giveChocolate()
    {
        return "送{$this->girl->getName()}巧克力！";
    }
}
