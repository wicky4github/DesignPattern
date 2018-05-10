<?php

namespace package\ChainOfResponsibility;

class CEO extends Handler
{
    /**
     * @param Application $application
     * @return string
     * @throws \Exception
     */
    public function handleApplication(Application $application)
    {
        if ($application->type == '请假') {
            return "{$this->name}：$application->type $application->number 天批准了";
        } elseif ($application->type == '加薪') {
            if ($application->number <= 500) {
                return "{$this->name}：$application->type $application->number 元批准了";
            } else {
                return "{$this->name}：$application->type $application->number 元，以后再说吧";
            }
        } else {
            throw new \Exception('无法处理申请');
        }
    }
}
