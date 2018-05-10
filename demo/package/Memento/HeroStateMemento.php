<?php

namespace package\Memento;

/**
 * 扮演 Memento 备忘录
 * Class HeroStateMemento
 * @package package\Memento
 */
class HeroStateMemento
{
    private $hp;
    private $mp;

    /**
     * HeroStateMemento constructor.
     * @param $hp
     * @param $mp
     */
    public function __construct($hp, $mp)
    {
        $this->hp = $hp;
        $this->mp = $mp;
    }

    /**
     * @return mixed
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @return mixed
     */
    public function getMp()
    {
        return $this->mp;
    }
}
