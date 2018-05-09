<?php

namespace package\Builder;

/**
 * 扮演 Builder
 * Class PersonBuilder
 * @package package\Builder
 */
abstract class PersonBuilder
{
    abstract public function buildHead();

    abstract public function buildBody();

    abstract public function buildLeftArm();

    abstract public function buildRightArm();

    abstract public function buildLeftLeg();

    abstract public function buildRightLeg();
}
