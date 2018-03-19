<?php

namespace Patterns\Structural\Proxy;


class HttpClient
{
    /**
     * @var array
     */
    private $users = [];

    public function __construct()
    {
        $this->users = [
            'mchekin' => [
                'firstName' => 'Michael',
            ]
        ];
    }

    /**
     * @param string $username
     * @return array
     */
    public function getData(string $username): array
    {
        return $this->users[$username] ?? [];
    }
}