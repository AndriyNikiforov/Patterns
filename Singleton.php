<?php

class Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (null == static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

$firstCall = Singleton::getInstance();
$secondCall = Singleton::getInstance();

echo ($firstCall == $secondCall) ? "true".PHP_EOL : "false".PHP_EOL;