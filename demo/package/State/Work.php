<?php

namespace package\State;

/**
 * 扮演 Context 上下文
 * Class Work
 * @package package\State
 */
class Work
{
    private $state;
    private $hours;
    private $finished;

    public function __construct(State $state = null)
    {
        // 默认状态为早上
        if ($state == null) {
            $state = new MorningState();
        }
        $this->state = $state;
    }

    /**
     * @param State $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @param int $hours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    /**
     * @return int
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * @param bool $finished
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;
    }

    /**
     * @return bool
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * 开放于客户端或者State内部的方法
     */
    public function writeProgram()
    {
        return $this->state->writeProgram($this);
    }
}
