<?php

namespace Patterns\Structural\Proxy\RemoteProxy;


use Patterns\Structural\Proxy\AccountInterface;

class RemoteAccount implements AccountInterface
{
    /**
     * @var array
     */
    private $data;
    /**
     * @var string
     */
    private $username;

    /**
     * GitHubLocal constructor.
     * @param array $data
     * @param string $username
     */
    public function __construct(array $data = [], string $username)
    {
        $this->username = $username;
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->data['firstName'] ?? '' ;
    }
}