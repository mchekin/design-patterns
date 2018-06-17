<?php

namespace Patterns\Creational\Singleton;

use BadMethodCallException;

// Singleton
final class Config
{
    private static $instance;

    final private function __construct($data = [])
    {
        $this->data = $data;
    }

    final private function __clone()
    {
        throw new BadMethodCallException("Singleton cloning is forbidden");
    }

    final private function __wakeup()
    {
        throw new BadMethodCallException("Singleton un-serialization is forbidden");
    }

    /**
     * @param array $data
     * @return self
     */
    final public static function getInstance()
    {
        if (is_null(self::$instance)) {
            static::$instance = new self();
        }

        return self::$instance;
    }
}