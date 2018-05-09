<?php

namespace package\Observer;

/**
 * Class TrainTicket 火车购票
 * @package package\Observer
 */
class TrainTicket implements TicketSubject
{
    private static $stock = 3;

    protected $observers = [];

    public function addObserver(TicketObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function buyTicket()
    {
        $arr = [];
        if (self::$stock > 0) {
            $ticket = rand(0, 999999);
            $arr[] = "火车票购买成功：$ticket <span class=\"badge\">库存：" . (self::$stock - 1) . "</span>";
            /**
             * @var TicketObserver $observer
             */
            foreach ($this->observers as $observer) {
                $arr[] = $observer->update($this, $ticket);
            }
            self::$stock -= 1;
        } else {
            $arr[] = "库存不足，购票失败！";
        }
        return $arr;
    }
}
