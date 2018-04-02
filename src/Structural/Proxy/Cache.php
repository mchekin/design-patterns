<?php

namespace Patterns\Structural\Proxy;


class Cache
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * @param string $key
     * @return string
     */
    public function get(string $key): string
    {
        return $this->data[$key] ?? '';
    }

    /**
     * @param string $key
     * @param string $value
     * @return Cache
     */
    public function set(string $key, string $value): Cache
    {
        $this->data[$key] = $value;

        return $this;
    }
}