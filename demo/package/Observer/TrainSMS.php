<?php

namespace package\Observer;

class TrainSMS implements TicketObserver
{

    public function update(TicketSubject $subject, $ticket)
    {
        return date('Y-m-d H:i:s') . " 短信日志记录：购票成功:$ticket";
    }
}
