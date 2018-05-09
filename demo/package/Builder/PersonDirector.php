<?php

namespace package\Builder;

/**
 * 扮演 Directory
 * Class PersonDirector 指挥者，用于指挥建造器
 * @package package\Builder
 */
class PersonDirector
{
    private $builder;

    public function __construct(PersonBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function createPerson()
    {
        // 建造过程
        $this->builder->buildHead();
        $this->builder->buildBody();
        $this->builder->buildLeftArm();
        $this->builder->buildRightArm();
        $this->builder->buildLeftLeg();
        $this->builder->buildRightLeg();
    }
}
