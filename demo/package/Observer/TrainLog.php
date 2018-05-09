<?php

namespace package\Observer;

class TrainLog implements TicketObserver
{

    public function update(TicketSubject $subject, $ticket)
    {
        return date('Y-m-d H:i:s') . " 文本日志记录：购票成功:$ticket";
    }
}
