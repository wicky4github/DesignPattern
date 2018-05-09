<?php

namespace package\Prototype;

trait Cloneable
{
    // 浅拷贝
    public function shallowClone()
    {
        return clone $this;
    }

    // 深拷贝
    public function deepClone()
    {
        // 先序列化再反序列化就能实现深拷贝
        return unserialize(serialize($this));
    }
}
