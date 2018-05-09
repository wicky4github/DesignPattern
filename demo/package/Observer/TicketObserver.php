<?php

namespace package\Observer;

/**
 * interface Observer 观察者
 * @package package\Observer
 */
interface TicketObserver
{
    public function update(TicketSubject $subject, $ticket);
}
