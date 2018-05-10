<?php

namespace package\Memento;

/**
 * 扮演 Originator 发起人
 * Class Hero
 * @package package\Memento
 */
class Hero
{
    private $hp;
    private $mp;

    /**
     * Hero constructor.
     * @param $hp
     * @param $mp
     */
    public function __construct($hp, $mp)
    {
        $this->hp = $hp;
        $this->mp = $mp;
    }

    public function saveState()
    {
        return new HeroStateMemento($this->hp, $this->mp);
    }

    public function recoveryState(HeroStateMemento $memento)
    {
        $this->hp = $memento->getHp();
        $this->mp = $memento->getMp();
    }

    public function fight()
    {
        // 没有状态了
        $this->hp = 0;
        $this->mp = 0;
    }

    public function showState()
    {
        echo '<p>当前HP：' . $this->hp . '</p>';
        echo '<p>当前MP：' . $this->mp . '</p>';
    }
}
