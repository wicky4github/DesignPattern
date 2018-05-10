<?php

namespace package\Command;

/**
 * 扮演 ConcreteCommand 具体命令
 * Class MakeMutton
 * @package package\Command
 */
class MakeMutton extends MakeDish
{

    public function execute()
    {
        return $this->chef->makeMutton();
    }
}
