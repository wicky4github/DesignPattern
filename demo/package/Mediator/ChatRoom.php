<?php

namespace package\Mediator;

/**
 * 扮演 Mediator 中介者 处理复杂逻辑，解耦了但是此类维护难度较大
 * 如果 Colleague 同事类是抽象的，有很多的派生类，那么本类就需要定义存放所有派生类对象的变量，并且开放方法，让不同派生类能够通信（参考大话设计模式第25章）
 * Class ChatRoom
 * @package package\Mediator
 */
class ChatRoom
{
    public static function showMessage(User $user, $message = '')
    {
        return date('Y-m-d H:i:s') . " [{$user->getName()}]: " . $message;
    }
}
