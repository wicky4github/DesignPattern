<?php

namespace package\Singleton;

class Db
{
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function connect()
    {
        return '连接数据库';
    }
}
