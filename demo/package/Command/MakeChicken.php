<?php

namespace package\Command;

/**
 * 扮演 ConcreteCommand 具体命令
 * Class MakeChicken
 * @package package\Command
 */
class MakeChicken extends MakeDish
{
    public function execute()
    {
        return $this->chef->makeChicken();
    }
}
