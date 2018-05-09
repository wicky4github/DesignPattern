<?php

namespace package\Observer;

/**
 * Interface Subject 被观察者（通知者）
 * @package package\Observer
 */
interface TicketSubject
{
    public function addObserver(TicketObserver $observer);
}
