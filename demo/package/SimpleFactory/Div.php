<?php

namespace package\SimpleFactory;

class Div extends Operation
{
    /**
     * @return float|int
     * @throws \Exception
     */
    public function getResult()
    {
        if ($this->num2 == 0) {
            throw new \Exception('被除数不能为0');
        }
        return $this->num1 / $this->num2;
    }
}
