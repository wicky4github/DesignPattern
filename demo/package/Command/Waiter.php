<?php

namespace package\Command;

/**
 * 扮演 Invoker 命令调用者
 * Class Waiter
 * @package package\Command
 */
class Waiter
{
    private $orders = [];

    // 设置命令
    public function addOrder(MakeDish $order)
    {
        $this->orders[] = $order;
    }

    // 取消命令
    public function cancelOrder(MakeDish $order)
    {
        foreach ($this->orders as $k => $v) {
            if ($v == $order) {
                unset($this->orders[$k]);
                break;
            }
        }
    }

    public function notify()
    {
        /**
         * @var MakeDish $order
         */
        foreach ($this->orders as $order) {
            // 调用命令
            echo $order->execute() . '<br>';
        }
    }
}
